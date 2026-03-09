<?php
session_start();
require_once("functions.php");

$password_length = 0;
$error = "";
if (isset($_GET["password"])) {
    $password_length = (int) $_GET["password"];

    if ($password_length < 6 || $password_length > 20) {
        $error = "Errore, hai inserito una lunghezza non valida. Riprova!";
    } else {
        $_SESSION["password_long"] = $password_length;
        header("Location: result.php");
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
    <!-- BootStrap-Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>100% Secure Password Generator</title>
</head>

<body class="bg-primary bg-gradient min-vh-100 d-flex flex-column">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-4 p-md-5">

                        <div class="text-center mb-4">
                            <div
                                class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3 p-3">
                                <i class="bi bi-shield-lock-fill text-primary fs-4"></i>
                            </div>
                            <h1 class="h3 fw-bold mb-1">Password Generator</h1>
                            <p class="text-muted small mb-0">Genera una password così sicura che <br> nemmeno tu
                                riuscirai
                                più ad accedere</p>
                        </div>

                        <!-- Form -->
                        <form action="" method="GET">
                            <div class="mb-3">
                                <label for="password" class="form-label fw-semibold">Lunghezza password</label>
                                <input name="password" type="number" id="password" class="form-control form-control-lg"
                                    min="6" max="20" placeholder="Es. 16">
                                <div class="form-text">Inserisci un numero tra 6 e 20.</div>
                                <?php if (!$error == "") {
                                    ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $error; ?>
                                    </div>
                                <?php }
                                ?>
                            </div>
                            <!-- <div class="mb-4">
                                <label class="form-label fw-semibold">Caratteri da includere</label>
                                <div class="d-flex flex-column gap-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="uppercase" id="uppercase">
                                        <label class="form-check-label" for="uppercase">
                                            <i class="bi bi-alphabet-uppercase me-1"></i>Lettere maiuscole <span
                                                class="text-muted">(A-Z)</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="lowercase" id="lowercase">
                                        <label class="form-check-label" for="lowercase">
                                            <i class="bi bi-alphabet me-1"></i>Lettere minuscole <span
                                                class="text-muted">(a-z)</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="numbers" id="numbers">
                                        <label class="form-check-label" for="numbers">
                                            <i class="bi bi-123 me-1"></i>Numeri <span class="text-muted">(0-9)</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="symbols" id="symbols">
                                        <label class="form-check-label" for="symbols">
                                            <i class="bi bi-asterisk me-1"></i>Simboli <span
                                                class="text-muted">(!@#$...)</span>
                                        </label>
                                    </div>
                                </div>
                            </div> -->
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary btn-lg" type="submit">
                                    <i class="bi bi-lightning-charge-fill me-2"></i>Genera password
                                </button>
                            </div>
                        </form>
                        <!-- End-Form -->

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