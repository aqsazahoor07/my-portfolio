

<?php

// Error reporting on
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Log errors
ini_set('log_errors', 1);
ini_set('error_log', '/tmp/php-error.log');

require __DIR__ . '/../public/index.php';