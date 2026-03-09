<?php
function password_generator(int $numb)
{
    $lowercase = "abcdefghijklmnopqrstuvwxyz";
    $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numbers = "0123456789";
    $symbols = "!@#$%^&*()-_=+[]{}|;:,.<>?";

    $characters_included = $lowercase . $uppercase . $numbers . $symbols;
    $password = "";

    for ($i = 0; $i < $numb; $i++) {
        $password .= $characters_included[random_int(0, strlen($characters_included) - 1)];
    }

    return $password;

}

?>