<?php

if (session_status() === PHP_SESSION_NONE) {
    $secure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');
        'httponly' => true,
        'secure'   => $secure,
        'samesite' => 'Lax',
    ]);
    session_start();
}

require_once __DIR__ . '/core/helpers.php';
require_once __DIR__ . '/config/Database.php';

$pdo = Database::get();
ensure_csrf();
