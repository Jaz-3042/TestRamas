<?php

require("App\Modelos\Computador.php");
use App\Modelos\Computador  as Portatil;

?>

<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="row">

    <div class="card" style="width: 18rem;">
        <img src="App/Imagenes/dad.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
                <?php
                $Computador1 = new Portatil("fr1","Asus","AD12","12");

                $Computador1 ->mostrarDatos();

                ?>
            </p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="App/Imagenes/hero.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
                <?php
                $Computador2 = new Portatil("Fr6","HP","AD16","16");

                $Computador2 ->mostrarDatos();
                ?>
            </p>
        </div>
    </div>



<div class="card" style="width: 18rem;">
    <img src="App/Imagenes/hp.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
            <?php
            $Computador3 = new Portatil("CR7","lenovo","DFR4","16");

            $Computador3 ->mostrarDatos();
            ?>
        </p>
    </div>
</div>



<table class="table table-dark">
    <thead>
    <tr>
        <th Marcas="col">#</th>
        <th Precios="col">First</th>
        <th Modelos="col">Last</th>
        <th Fechas="col">Handle</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th Computador="row">1</th>
        <td>Lenovo</td>
        <td>Azul</td>
        <td>FRT3</td>
    </tr>
    <tr>
        <th Computador="row">2</th>
        <td>HP</td>
        <td>Negro</td>
        <td>TFR5</td>
    </tr>
    <tr>
        <th Computador="row">3</th>
        <td>ASUS</td>
        <td>Rojo</td>
        <td>TR3</td>
    </tr>
    </tbody>
</table>

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
