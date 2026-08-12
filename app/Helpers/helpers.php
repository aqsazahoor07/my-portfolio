<?php

if (!function_exists('maskEmail')) {
    function maskEmail($email)
    {
        if (empty($email)) {
            return '';
        }

        $parts = explode('@', $email);
        $username = $parts[0];
        $domain = $parts[1] ?? '';

        $usernameLength = strlen($username);
        
        if ($usernameLength <= 2) {
            $maskedUsername = $username;
        } else {
            $firstChar = substr($username, 0, 2);
            $lastChar = substr($username, -1);
            $maskedUsername = $firstChar . str_repeat('*', max(0, $usernameLength - 3)) . $lastChar;
        }

        return $maskedUsername . '@' . $domain;
    }
}