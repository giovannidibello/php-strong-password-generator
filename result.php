<?php

// avvio una sessione
session_start();

// importo il file delle funzioni
require_once "./functions.php";

// se il form ha inviato i dati e non sono ne vuoti e ne minori di 0
if (!empty($_POST["password"]) && intval($_POST["password"]) > 0) {
    $lenghtpass = intval($_POST["password"]);

    // verifica se i checkbox sono selezionati
    $includeLetters = isset($_POST["letters"]);
    $includeNumbers = isset($_POST["numbers"]);
    $includeSymbols = isset($_POST["symbols"]);
    // crea la password
    $password = createPassword($lenghtpass, $includeLetters, $includeNumbers, $includeSymbols);

    // salvo la password nella sessione
    $_SESSION["password"] = $password;
} else {
    // se non c'è dato torno indietro
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- importo bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Risultato</title>
</head>

<body>

    <div class="container-fluid">
        <h1 class="text-center m-4">Strong Password Generator</h1>
        <h2 class="text-center m-4">La tua password generata è:</h2>
        <h3 class="text-center m-3"><?php echo $_SESSION["password"]; ?></h3>

        <div class="d-flex justify-content-center">
            <a class="btn btn-primary mt-4" href="./index.php">Torna indietro</a>
        </div>
    </div>

</body>

</html>