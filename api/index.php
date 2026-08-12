<?php

// Display errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Set Laravel environment
putenv('APP_ENV=production');
putenv('APP_DEBUG=true');

// Load Laravel
require __DIR__ . '/../public/index.php';