<?php
function password_generator(int $numb)
{
    $caratteri = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $password = "";
    for ($i = 0; $i < $numb; $i++) {
        $password .= $caratteri[random_int(0, strlen($caratteri) - 1)];
    }

    return $password;

}

?>