<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Airbus A320</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/airplanes.css') }}" rel="stylesheet">

</head>

<body style="background-color:#EDF7F6;">

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#1F3A5F;">
    <div class="container">
        <a class="navbar-brand" href="/">My Air Web</a>
        <a class="btn btn-light" href="/">Volver</a>
    </div>
</nav>

<h1>Airbus A320</h1>
<a> <img width="1200" height="600" class="d-block mx-auto" src="https://images.aircharterservice.com/global/aircraft-guide/group-charter/airbus-a320-1.jpg" style="border-radius: 6%"></a>

<section class="container my-5">
    <h2 class="text-center mb-4">Especificaciones Tecnicas</h2>

    <div class="row g-4">
        <div class="col-md-3">
            <div class="card spec-card p-3 text-center">
                <h5>Fabricante</h5>
                <p>Airbus</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card spec-card p-3 text-center">
                <h5>Capacidad</h5>
                <p>150-180 pasajeros</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card spec-card p-3 text-center">
                <h5>Alcance</h5>
                <p>6,300 km</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card spec-card p-3 text-center">
                <h5>Primer vuelo</h5>
                <p>1987</p>
            </div>
        </div>
    </div>
</section>

<section class="container my-5">
    <h2 class="text-center mb-4">Historia</h2>
    <p class="text-center">
        El Airbus A320 revolucionó la aviación comercial al introducir sistemas
        fly-by-wire y una cabina altamente automatizada. Es uno de los aviones
        más vendidos de la historia.
    </p>
</section>

<section class="container my-5 gallery">
    <h2 class="text-center mb-4">Galería</h2>

    <div class="row g-4">
        <div class="col-md-4">
            <img src="{{ asset('imgs/a320.jpg') }}" class="img-fluid">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('imgs/a320.jpg') }}" class="img-fluid">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('imgs/a320.jpg') }}" class="img-fluid">
        </div>
    </div>
</section>

<footer class="text-center py-4" style="background-color:#1F3A5F; color:white;">
    © 2026 My Air Web - Juan Castrillon - Facultad de Ingenieria, Universidad de Cundinamarca
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>