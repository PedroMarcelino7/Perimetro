<?php
require('perimetro.php');

$botaoClicado = 0;

if (isset($_POST['button1'])) {
    $botaoClicado = 1;
} else if (isset($_POST['button2'])) {
    $botaoClicado = 2;
} else if (isset($_POST['button3'])) {
    $botaoClicado = 3;
} else if (isset($_POST['button4'])) {
    $botaoClicado = 4;
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme='dark'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício de Programação Web</title>

    <link rel="stylesheet" href="css/styles.css">

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-8 offset-2">
                <h1 class="h6 fst-italic text-center">Pedro Paulo Marcelino | <span class="fst-normal">5º ADS</span>
                </h1>

                <div class="text-center my-4">
                    <h1 class="h3">Perímetro de Figuras Geométricas</h1>
                    <h2 class="h5">Programação Web | <span class="h6">29/02/2024</span></h2>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-8 col-md-4 offset-2 offset-md-4">
                <div class="row">
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <div class="p-2 bg-light rounded-3 d-flex justify-content-center align-items-center options"
                            onclick="changeClass('Retangulo')">
                            <img class="img-fluid" src="./images/retangulo.png" alt="">
                        </div>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <div class="p-2 bg-light rounded-3 d-flex justify-content-center align-items-center options"
                            onclick="changeClass('Quadrado')">
                            <img class="img-fluid" src="./images/quadrado.png" alt="">
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="p-2 bg-light rounded-3 d-flex justify-content-center align-items-center options"
                            onclick="changeClass('Paralelogramo')">
                            <img class="img-fluid" src="./images/paralelogramo.png" alt="">
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="p-2 bg-light rounded-3 d-flex justify-content-center align-items-center options"
                            onclick="changeClass('Trapezio')">
                            <img class="img-fluid" src="./images/trapezio.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <div>
                            <!-- RETANGULO -->
                            <form class="form d-none flex-column gap-3" id="Retangulo" method="post">
                                <input class="form-control form-control-lg" type="number" placeholder="Altura (h)"
                                    name="h" required>

                                <input class="form-control form-control-lg" type="number" placeholder="Base (b)"
                                    name="b" required>

                                <div class="d-flex justify-content-center w-100 mt-2">
                                    <button class="btn btn-lg btn-light fw-bold" type="submit"
                                        name="button1">Calcular</button>
                                </div>

                                <?php if ($botaoClicado == 1): ?>
                                    <?php
                                    $altura = $_POST['h'];
                                    $base = $_POST['b'];

                                    $calculo = new Perimetro();

                                    $calculo->Retangulo($altura, $base);
                                    ?>
                                <?php endif; ?>
                            </form>

                            <!-- QUADRADO -->
                            <form class="form d-none flex-column gap-3" id="Quadrado" method="post">
                                <input class="form-control form-control-lg" type="number" placeholder="Lado (a)"
                                    name="a" required>

                                <div class="d-flex justify-content-center w-100 mt-2">
                                    <button class="btn btn-lg btn-light fw-bold" type="submit"
                                        name="button2">Calcular</button>
                                </div>

                                <?php if ($botaoClicado == 2): ?>
                                    <?php
                                    $lado = $_POST['a'];

                                    $calculo = new Perimetro();

                                    $calculo->Quadrado($lado);
                                    ?>
                                <?php endif; ?>
                            </form>

                            <!-- PARALELOGRAMO -->
                            <form class="form d-none flex-column gap-3" id="Paralelogramo" method="post">
                                <input class="form-control form-control-lg" type="number" placeholder="Lado (a)"
                                    name="a" required>

                                <input class="form-control form-control-lg" type="number" placeholder="Base (b)"
                                    name="b" required>

                                <div class="d-flex justify-content-center w-100 mt-2">
                                    <button class="btn btn-lg btn-light fw-bold" type="submit"
                                        name="button3">Calcular</button>
                                </div>

                                <?php if ($botaoClicado == 3): ?>
                                    <?php
                                    $lado = $_POST['a'];
                                    $base = $_POST['b'];

                                    $calculo = new Perimetro();

                                    $calculo->Paralelogramo($lado, $base);
                                    ?>
                                <?php endif; ?>
                            </form>

                            <!-- TRAPEZIO -->
                            <form class="form d-none flex-column gap-3" id="Trapezio" method="post">
                                <input class="form-control form-control-lg" type="number" placeholder="Lado 1 (a)"
                                    name="a" required>

                                <input class="form-control form-control-lg" type="number" placeholder="Lado 2 (c)"
                                    name="c" required>

                                <input class="form-control form-control-lg" type="number" placeholder="Base Menor (b)"
                                    name="b" required>

                                <input class="form-control form-control-lg" type="number" placeholder="Base Maior (B)"
                                    name="B" required>

                                <div class="d-flex justify-content-center w-100 mt-2">
                                    <button class="btn btn-lg btn-light fw-bold" type="submit"
                                        name="button4">Calcular</button>
                                </div>

                                <?php if ($botaoClicado == 4): ?>
                                    <?php
                                    $lado1 = $_POST['a'];
                                    $lado2 = $_POST['c'];
                                    $base1 = $_POST['b'];
                                    $base2 = $_POST['B'];

                                    $calculo = new Perimetro();

                                    $calculo->Trapezio($lado1, $lado2, $base1, $base2);
                                    ?>
                                <?php endif; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>