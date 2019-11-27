<?php
require ("App\Modelos\Persona.php");
use App\Modelos\Persona;

?>

<!doctype html>
<html lang="en">
<head>

    <title>Datos de los Computadores</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    body { background-color: #C2F3EC; }
</style>

<body>

<div class="col-12 text-center">

    <div class="text-center" style='text-align: center'>
        <h1>Datos Empresa de Computadoras</h1>
    </div>


</div>

<div class="content">

    <div class="col-12">

        <div class="row">

            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cliente 1</h5>
                    <p class="card-text">
                        <?php
                        $Cliente1 = new Persona("Sandra", "Orduz", 3144608199, "calle5 8-60");

                        $Cliente1 ->MostarDatos();

                        ?>
                    </p>
                    <a href="#" class="btn btn-primary">ir a</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cliente 2</h5>
                    <p class="card-text">
                        <?php
                        $Cliente2 = new Persona("Jazlidin", "Orduz", 3143564565, "calle 26 43-23");

                        $Cliente2 ->MostarDatos();
                        ?>
                    </p>
                    <a href="#" class="btn btn-primary">ir a</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cliente 3</h5>
                    <p class="card-text">
                        <?php
                        $Cliente3 = new Persona("Leonardo", "Perez", 3144646467, "calle 7 12-21");

                        $Cliente3 ->MostarDatos();
                        ?>
                    </p>
                    <a href="#" class="btn btn-primary">ir a</a>
                </div>
            </div>

        </div>

    </div>


</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
