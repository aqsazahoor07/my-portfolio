<?php

// Force error display
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Log errors
ini_set('log_errors', 1);
ini_set('error_log', '/tmp/php-error.log');

// Check if public/index.php exists
$publicIndex = __DIR__ . '/../public/index.php';
if (!file_exists($publicIndex)) {
    die("ERROR: public/index.php not found at: " . $publicIndex);
}

// Check vendor autoload
$autoload = __DIR__ . '/../vendor/autoload.php';
if (!file_exists($autoload)) {
    die("ERROR: vendor/autoload.php not found at: " . $autoload);
}

// Try to load Laravel
try {
    require $publicIndex;
} catch (Exception $e) {
    die("ERROR: " . $e->getMessage() . "\nFile: " . $e->getFile() . "\nLine: " . $e->getLine());
} catch (Error $e) {
    die("ERROR: " . $e->getMessage() . "\nFile: " . $e->getFile() . "\nLine: " . $e->getLine());
}