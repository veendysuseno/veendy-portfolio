<?php
declare(strict_types=1);
require __DIR__ . '/../includes/functions.php';
header('Content-Type: application/json; charset=utf-8');

function respond(bool $ok, string $error = '', int $status = 200)
{
    http_response_code($status);
    echo json_encode(['ok' => $ok, 'error' => $error], JSON_UNESCAPED_UNICODE);
    exit;
}
function clean(string $v): string
{
    return trim((string) preg_replace('/[\r\n]+/', ' ', $v)); // cegah header injection
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    respond(false, 'Metode tidak diizinkan.', 405);
}
if (!hash_equals($_SESSION['csrf'] ?? '', (string) ($_POST['csrf'] ?? ''))) {
    respond(false, 'Sesi kedaluwarsa. Muat ulang halaman lalu coba lagi.', 403);
}
if (!empty($_POST['website'])) {
    respond(true); // honeypot terisi = bot, pura-pura sukses
}

$cfg = config();
if (time() - (int) ($_SESSION['last_sent'] ?? 0) < (int) $cfg['min_interval']) {
    respond(false, 'Mohon tunggu sebentar sebelum mengirim pesan lagi.', 429);
}

$name    = clean((string) ($_POST['name'] ?? ''));
$email   = clean((string) ($_POST['email'] ?? ''));
$subject = clean((string) ($_POST['subject'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));

if ($name === '' || mb_strlen($name) > 100)                       respond(false, 'Nama wajib diisi (maks. 100 karakter).', 422);
if (!filter_var($email, FILTER_VALIDATE_EMAIL))                   respond(false, 'Email tidak valid.', 422);
if ($subject === '' || mb_strlen($subject) > 150)                 respond(false, 'Subjek wajib diisi (maks. 150 karakter).', 422);
if (mb_strlen($message) < 10 || mb_strlen($message) > 3000)       respond(false, 'Pesan harus 10–3000 karakter.', 422);

$body = "Nama  : {$name}\nEmail : {$email}\n\n{$message}\n";
$headers = [
    'From'         => 'Portfolio <' . $cfg['mail_from'] . '>',
    'Reply-To'     => $email,
    'MIME-Version' => '1.0',
    'Content-Type' => 'text/plain; charset=UTF-8',
];
$subjectLine = '=?UTF-8?B?' . base64_encode('[Portfolio] ' . $subject) . '?=';

if (!mail($cfg['mail_to'], $subjectLine, $body, $headers)) {
    respond(false, 'Pesan gagal dikirim. Silakan hubungi lewat email langsung.', 500);
}
$_SESSION['last_sent'] = time();
respond(true);
