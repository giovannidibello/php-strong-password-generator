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

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- importo bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Generatore Password</title>
</head>

<body>
    <div class="container-fluid">
        <h1 class="text-center m-4">Strong Password Generator</h1>
        <h2 class="text-center m-3">Genera una password sicura</h2>
    </div>
    <div class="d-flex justify-content-center align-items-center">
        <div class="card p-4">
            <form action="" method=GET>
                <div class="d-flex align-items-center justify-content-center gap-3 mb-4">
                    <label for="password">Lunghezza password</label>
                    <input type="number" name="password" id="password">
                </div>

                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary btn-sm" type="submit">Cerca</button>
                </div>

            </form>
        </div>
    </div>

    <h3 class="text-center m-3"><?php echo "La password generata è: " . $password ?></h3>

</body>

</html>