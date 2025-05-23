<?php

// funzione per generare password casuale
function createPassword($lenghtpass, $includeLetters, $includeNumbers, $includeSymbols)
{

    // stringhe per creazione password    
    $stringLetters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $stringNumbers = "123456789";
    $stringSymbols = "!@#$%^&*()-_+=<>?{}[]|~";
    $password = "";

    // costruisco la stringa
    $charPool = "";

    if ($includeLetters) {
        // aggiungo lettere
        $charPool .= $stringLetters;
    }
    if ($includeNumbers) {
        // aggiungo numeri
        $charPool .= $stringNumbers;
    }
    if ($includeSymbols) {
        // aggiungo simboli
        $charPool .= $stringSymbols;
    }
    if ($charPool === "") {
        // aggiungo uso tutto i caratteri
        $charPool .= $stringLetters . $stringNumbers . $stringSymbols;
    }

    // ciclo fino alla lunghezza dei caratteri desiderati
    for ($i = 0; $i < $lenghtpass; $i++) {

        // concateno i caratteri in modo casuale
        $password .= $charPool[rand(0, strlen($charPool) - 1)];
    }

    return $password;
}
