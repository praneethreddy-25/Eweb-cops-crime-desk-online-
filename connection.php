<?php

// Database configuration.
// Environment variables can override these local development defaults.
$dbHost = getenv('ECOPS_DB_HOST') ?: 'localhost';
$dbUser = getenv('ECOPS_DB_USER') ?: 'root';
$dbPassword = getenv('ECOPS_DB_PASSWORD');

if ($dbPassword === false) {
    $dbPassword = '';
}

$dbName = getenv('ECOPS_DB_NAME') ?: 'ecops';

try {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $conn = new mysqli(
        $dbHost,
        $dbUser,
        $dbPassword,
        $dbName
    );

    // Support a wide range of characters safely.
    $conn->set_charset('utf8mb4');

} catch (mysqli_sql_exception $e) {
    // Keep technical details in server logs, not in the browser.
    error_log('ECOPS database connection failed: ' . $e->getMessage());

    http_response_code(500);
    exit('Database connection failed. Please try again later.');
}
?>