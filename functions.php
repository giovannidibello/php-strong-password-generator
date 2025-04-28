<?php

// funzione per generare password casuale
function createPassword($lenghtpass)
{

    // stringa per creazione password
    $string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
    $password = "";

    // ciclo fino alla lunghezza dei caratteri desiderati
    for ($i = 0; $i < $lenghtpass; $i++) {

        // concateno i caratteri in modo casuale
        $password .= $string[rand(0, strlen($string) - 1)];
    }

    return $password;
}
