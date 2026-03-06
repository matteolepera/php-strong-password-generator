<?php
require_once("functions.php");

$password_length = 0;

if (isset($_GET["password"])) {
    $password_length = (int) $_GET["password"];
    if ($password_length < 6 || $password_length > 20) {
        die("Lunghezza non valida.");
    }
}

?>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>100% Secure Password Generator</title>
</head>

<body>
    <div class="container py-5 text-center">
        <h1>Secure Password Generator</h1>
        <p>Genera una password completamente sicura!</p>

        <div>
            <!-- Creare un form che invii in GET la lunghezza desiderata della password. Una nostra funzione utilizzerà
            questo dato per generare una password casuale (composta da lettere minuscole, maiuscole, numeri e/o simboli)
            della lunghezza specificata, da restituire all’utente. -->
            <form action="" method="GET">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="password" class="col-form-label">Inserisci lunghezza password:</label>
                    </div>
                    <div class="col-1">
                        <input name="password" type="number" id="password" class="form-control" min="6" max="20">
                    </div>
                    <div class="col-auto">
                        <span id="passwordHelpInline" class="form-text">
                            Inserisci un numero da 6-20.
                        </span>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Genera!</button>
                <a class="btn btn-danger" href="index.php">Resetta</a>
            </form>
        </div>
        <?php
        echo password_generator($password_length);
        ?>

    </div>
    </div>
</body>
<!-- BootStrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

</html>