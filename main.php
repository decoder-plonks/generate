<?php

function generateRandomPassword($length = 8) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $index = mt_rand(0, strlen($characters) - 1);
        $password .= $characters[$index];
    }

    return $password;
}

// Example: Generate a random password with a default length of 8 characters
$randomPassword = generateRandomPassword();
echo "Random Password: $randomPassword";

?>
