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
    // salvo la lunghezza della password nella sessione
    $_SESSION["lenghtpass"] = $lenghtpass;

    // Redireziona alla pagina del risultato
    header("Location: result.php");
    exit;
}

?>

<?php

// Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password “sicure”.
// L’esercizio è suddiviso in varie milestones ed è importante svilupparle nell’ordine corretto.

// Milestone 1
// Creare un form che invii in GET la lunghezza desiderata della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere minuscole, maiuscole, numeri e/o simboli) della lunghezza specificata, da restituire all’utente.
// Scriviamo tutta la logica ed il layout in un unico file index.php

// Milestone 2
// Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php, che includeremo poi nella pagina principale.

// Milestone 3 (BONUS)
// Invece di visualizzare la password generata nella stessa pagina (index.php), effettuiamo un redirect ad una seconda pagina (result.php), dedicata proprio a mostrare il risultato. Questa pagina riceverà la password che era stata generata tramite sessione e la mostrerà all’utente.

// Milestone 4 (BONUS)
// Gestire ulteriori parametri nel form per le password, dando la possibilità all’utente di specificare quali set di caratteri possono essere ammessi nella password da generare, tra lettere maiuscole, lettere minuscole, numeri e simboli.

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- importo bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Generatore Password</title>
    <style>
        body {
            background-color: #f0f8ff;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        h1,
        h2 {
            color: #2f4f4f;
        }

        label {
            color: #555;
        }

        .form-check-input {
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 20px;
            padding: 10px 20px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .form-control {
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <h1 class="text-center m-4">Strong Password Generator</h1>
        <h2 class="text-center m-3">Genera una password sicura</h2>
    </div>
    <div class="d-flex justify-content-center align-items-center">
        <div class="card p-4">
            <form method=POST>
                <div class="d-flex align-items-center justify-content-center gap-3 mb-4">
                    <label for="password">Lunghezza password</label>
                    <input type="number" name="password" id="password" min="4" max="15">
                </div>

                <div class="d-flex justify-content-center align-items-center gap-5 mb-3">
                    <div class="d-flex gap-3 align-items-center">
                        <label for="letters">Lettere</label>
                        <input type="checkbox" class="form-check-input" name="letters" id="letters">
                    </div>
                    <div class="d-flex gap-3 align-items-center">
                        <label for="numbers">Numeri</label>
                        <input type="checkbox" class="form-check-input" name="numbers" id="numbers">
                    </div>
                    <div class="d-flex gap-3 align-items-center">
                        <label for="symbols">Simboli</label>
                        <input type="checkbox" class="form-check-input" name="symbols" id="symbols">
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary" type="submit">Invia</button>
                </div>

            </form>
        </div>
    </div>

</body>

</html>