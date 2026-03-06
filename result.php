<?php
session_start();
// var_dump($_SESSION);
$session_password = $_SESSION["password_long"];
require_once("functions.php");
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
        <p>La tua password di <?php echo "<strong>$session_password</strong>" ?> caratteri è stata generata!</p>

        <div class="alert alert-success" role="alert">
            <?php echo "<strong>" . password_generator($session_password) . "</strong>"; ?>
        </div>

        <a class="btn btn-primary" href="index.php">Genera una nuova password!</a>
</body>
<!-- BootStrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

</html>