<?php
declare(strict_types=1);

if (session_status() === PHP_SESSION_NONE) {
    session_start(['cookie_httponly' => true, 'cookie_samesite' => 'Lax']);
}

function config(): array
{
    static $cfg = null;
    return $cfg ??= require __DIR__ . '/../config/config.php';
}

function e(string $v): string
{
    return htmlspecialchars($v, ENT_QUOTES, 'UTF-8');
}

function csrf_token(): string
{
    return $_SESSION['csrf'] ??= bin2hex(random_bytes(32));
}

// Tambahkan ?v=waktu-ubah agar browser memuat ulang file yang berubah
function asset(string $path): string
{
    $file = __DIR__ . '/../' . $path;
    return $path . (is_file($file) ? '?v=' . filemtime($file) : '');
}
