<?php
/* ═══════════════════════════════════════════
   THANASIS KOUFOS — PORTFOLIO
   mailer.php  —  Contact form handler
   (Ready for future use — not wired to form yet)

   TO ACTIVATE:
   1. Install PHPMailer via Composer or download manually
   2. Set your SMTP credentials below
   3. Add a <form> to the Contact section in index.php
      that POSTs to mailer.php
═══════════════════════════════════════════ */

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

/* ── Sanitise input ── */
$name    = htmlspecialchars(trim($_POST['name']    ?? ''));
$email   = filter_var(trim($_POST['email']   ?? ''), FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars(trim($_POST['message'] ?? ''));

if (!$name || !filter_var($email, FILTER_VALIDATE_EMAIL) || !$message) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid input']);
    exit;
}

/* ── Simple mail() fallback (works on most shared hosts) ── */
$to      = 'thanasis.koufos1@gmail.com';
$subject = "Portfolio contact from {$name}";
$body    = "Name: {$name}\nEmail: {$email}\n\nMessage:\n{$message}";
$headers = "From: noreply@thanasis-codes.eu\r\nReply-To: {$email}";

if (mail($to, $subject, $body, $headers)) {
    echo json_encode(['success' => true]);
} else {
    http_response_code(500);
    echo json_encode(['error' => 'Mail failed']);
}

/*
   ── PHPMailer / SMTP (uncomment when ready) ──

   require 'vendor/autoload.php';
   use PHPMailer\PHPMailer\PHPMailer;

   $mail = new PHPMailer(true);
   $mail->isSMTP();
   $mail->Host       = 'smtp.gmail.com';
   $mail->SMTPAuth   = true;
   $mail->Username   = 'your@gmail.com';
   $mail->Password   = 'app-password';
   $mail->SMTPSecure = 'tls';
   $mail->Port       = 587;
   $mail->setFrom('noreply@thanasis-codes.eu', 'Thanasis Portfolio');
   $mail->addAddress($to);
   $mail->Subject = $subject;
   $mail->Body    = $body;
   $mail->send();
*/
