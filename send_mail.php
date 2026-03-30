<?php
/* ═══════════════════════════════════════════
   send_mail.php — Contact Form Backend
   thanasis-codes.eu
═══════════════════════════════════════════ */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

/* ── Only accept POST ── */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

/* ── Read JSON body ── */
$raw  = file_get_contents('php://input');
$data = json_decode($raw, true);

if (!$data) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid JSON']);
    exit;
}

/* ── Sanitize & validate ── */
$name    = trim(strip_tags($data['name']    ?? ''));
$email   = trim(strip_tags($data['email']   ?? ''));
$subject = trim(strip_tags($data['subject'] ?? ''));
$message = trim(strip_tags($data['message'] ?? ''));

if (!$name || !$email || !$subject || !$message) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'All fields are required']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid email address']);
    exit;
}

/* ── Rate limiting (simple file-based) ── */
$rate_file = sys_get_temp_dir() . '/tcmail_' . md5($_SERVER['REMOTE_ADDR']);
$now       = time();
if (file_exists($rate_file)) {
    $last = (int)file_get_contents($rate_file);
    if ($now - $last < 60) {
        http_response_code(429);
        echo json_encode(['success' => false, 'message' => 'Please wait before sending again']);
        exit;
    }
}
file_put_contents($rate_file, $now);

/* ══════════════════════════════════════════
   MAIL CONFIGURATION
   ══════════════════════════════════════════ */
$to      = 'thanasis.koufos1@gmail.com';   // Where you receive messages
$from    = 'info@thanasis-codes.eu';        // Your domain email (sender)
$reply   = $email;                          // Reply-To → visitor's email

/* ── Build subject ── */
$mail_subject = '[Portfolio Contact] ' . $subject;

/* ── Build plain text body ── */
$body  = "New message from your portfolio contact form\n";
$body .= str_repeat('─', 48) . "\n\n";
$body .= "Name:    {$name}\n";
$body .= "Email:   {$email}\n";
$body .= "Subject: {$subject}\n\n";
$body .= "Message:\n{$message}\n\n";
$body .= str_repeat('─', 48) . "\n";
$body .= "Sent via thanasis-codes.eu\n";

/* ── Headers ── */
$headers  = "From: {$name} <{$from}>\r\n";
$headers .= "Reply-To: {$name} <{$reply}>\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

/* ── Send ── */
$sent = mail($to, $mail_subject, $body, $headers);

if ($sent) {
    echo json_encode(['success' => true, 'message' => 'Message sent successfully']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Mail server error']);
}
