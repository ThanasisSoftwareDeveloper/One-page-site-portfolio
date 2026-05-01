<?php
/* ═══════════════════════════════════════════
   THANASIS KOUFOS — PORTFOLIO
   counter.php  —  Page view counter
   Stores count in counter.txt (auto-created)
═══════════════════════════════════════════ */

$file = __DIR__ . '/counter.txt';

/* Read current count */
$count = 0;
if (file_exists($file)) {
    $count = (int) trim(file_get_contents($file));
}

/* Increment only on full page load (not AJAX/asset requests) */
$count++;
file_put_contents($file, $count, LOCK_EX);

return $count;
