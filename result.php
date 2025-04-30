<?php

// avvio una sessione
session_start();

// se la password non è settata, reindirizza all'index
if (!isset($_SESSION["password"])) {
    header("Location: index.php");
    exit;
}

$password = $_SESSION["password"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- importo bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Risultato</title>
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
    </style>
</head>

<body>

    <div class="container-fluid">
        <h1 class="text-center m-4">Strong Password Generator</h1>
        <h2 class="text-center m-4">La tua password generata è di : <?php echo $_SESSION["lenghtpass"]; ?> caratteri</h2>
        <h3 class="text-center m-3"><?php echo $_SESSION["password"]; ?></h3>

        <div class="d-flex justify-content-center">
            <a class="btn btn-primary mt-4" href="./index.php">Torna indietro</a>
        </div>
    </div>

</body>

</html>