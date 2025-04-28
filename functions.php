<?php

// salvo la lunghezza del valore di input del form
$lenghtpass = ($_GET["password"]);

// stringa per creazione password
$string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";

// funzione per generare password casuale
function createPassword($string, $lenghtpass)
{

    $password = "";

    // ciclo fino alla lunghezza dei caratteri desiderati
    for ($i = 0; $i < $lenghtpass; $i++) {

        // concateno i caratteri in modo casuale
        $password .= $string[rand(0, strlen($string) - 1)];
    }

    return $password;
}

$password = createPassword($string, $lenghtpass);
