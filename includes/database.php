<?php
$db = mysqli_connect(
    $_ENV['DB_HOST'] ?? '',
    $_ENV['DB_USER'] ?? '',
    $_ENV['DB_PASS'] ?? '',
    $_ENV['DB_NAME'] ?? ''
);
$db->set_charset("utf8");

if (!$db) {
    echo "ERROR";
    exit;
}