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
    <!-- BootStrap-Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>100% Secure Password Generator</title>
</head>

<!-- <body>
    <div class="container py-5 text-center">
        <h1>Secure Password Generator</h1>
        <p>La tua password di <?php echo "<strong>$session_password</strong>" ?> caratteri è stata generata!</p>

        <div class="alert alert-success" role="alert">
            <?php echo "<strong>" . password_generator($session_password) . "</strong>"; ?>
        </div>

        <a class="btn btn-primary" href="index.php">Genera una nuova password!</a>
</body> -->

<body class="bg-success bg-gradientmin-vh-100 d-flex flex-column">

    <div class="container py-5 flex-grow-1">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">

                <div class="card border-0 shadow rounded-4">
                    <div class="card-body p-4 p-md-5">

                        <div class="text-center mb-4">
                            <div
                                class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3 p-3">
                                <i class="bi bi-shield-fill-check text-success fs-4"></i>
                            </div>
                            <h1 class="h3 fw-bold mb-1">Password Generata!</h1>
                            <p class="text-muted small mb-0">
                                La tua password di <strong>
                                    <?php echo $session_password; ?>
                                </strong> caratteri è pronta
                            </p>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold text-muted small text-uppercase">La tua
                                password</label>
                            <div class="p-3 bg-light rounded-3 font-monospace fs-5 text-center fw-semibold">
                                <?php echo password_generator($session_password); ?>
                            </div>
                            <div class="form-text text-center mt-2">
                                <i class="bi bi-lock-fill me-1"></i>Copiala e conservala in un posto sicuro
                            </div>
                        </div>

                        <div class="d-grid">
                            <a class="btn btn-primary btn-lg" href="index.php">
                                <i class="bi bi-arrow-repeat me-2"></i>Genera una nuova password
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
<!-- BootStrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

</html>