<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Airbus A320</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/airplanes.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('imgs/logo_icono.png') }}">
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
<br>
<hr>
<section class="container my-5">
    <h2 class="text-center mb-4">Especificaciones Tecnicas</h2>

    <div class="row g-4">
        <div class="col-md-3">
            <div class="card spec-card p-3 text-center">
                <h3>Fabricante</h3>
                <p  style="font-size: 25px">Airbus</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card spec-card p-3 text-center">
                <h3>Capacidad</h3>
                <p  style="font-size: 25px">150-180 pasajeros</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card spec-card p-3 text-center">
                <h3>Alcance</h3>
                <p  style="font-size: 25px">6,300 km</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card spec-card p-3 text-center">
                <h3>Primer vuelo</h3>
                <p style="font-size: 25px">1987</p>
            </div>
        </div>
    </div>
</section>


    <h2 class="h2Historia">Historia</h2>
    <pre class="texto" id="texto" >
        El airbus A320 es uno de los aviones comerciales mas emblematicos de la aviacion moderna, este fabricado por el consorcio europeo Airbus
        es parte de la familia de modernos AA320 que incluye el A318, A319 y a321. El A320 es un reactor de unico pasillo que se ha diseñado para 
        realizar vuelos a corta y media distancia ofreciendonos eficiencia en el consumo de combustible y creando un alto confort a los pasajeros.
        Su primer vuelo tuvo lugar en 1987, y este avion ha revolucionado la aviacion comercial con la introduccion de tecnologias innovadoras como 
        la cabina de mando totalmente digital que reemplaza los controles mecanicos tradicionales por sistemas electronicos  que aumentan la seguridad
        y la precision en el vuelo.  
    </pre>
    <br>
    <pre class="texto">
        Ademas, este es conocido por su fiabilidad operativa y bajo costo de mantenimiento, lo que lo convierte en la opcion preferida de todas las
        aerolineas para rutas nacionales y reginales, su diseño compacto y eficiente le permite operar en aeropuertos con pistas mas cortas, ampliando 
        las posibilidades de conectividad.
    </pre>

<section class="container">
    <h2 class="text-center mb-4">Galería</h2>
    <!--row es una fila y g es el espaciado dentro de los elementos que conformaran la fila-->
    <div class="row g-5">
        <div class="col-md-4">
            <img src="https://www.elespectador.com/resizer/v2/JBCHH27TACSJSKAL4SINLEJMCA.jpg?auth=0f797703114483a2485f451f270a75baf1fcc19cdb33ae83503277124c6387fc&width=920&height=613&smart=true&quality=60" class="img-fluid">
        </div>
        <div class="col-md-4">
            <img src="https://ichef.bbci.co.uk/ace/ws/640/cpsprodpb/45ed/live/a6e478e0-ccc5-11f0-8b92-9bd6664fd6cf.jpg.webp" class="img-fluid">
        </div>
        <div class="col-md-4">
            <img src="https://larazon.co/wp-content/uploads/2025/11/Fotos-2.jpg" class="img-fluid">
        </div>
    
    </div>
    <br>
    <div class="row g-5">
        <div class="col-md-4">
            <img src="https://ichef.bbci.co.uk/ace/ws/640/amz/worldservice/live/assets/images/2015/03/24/150324185235_airbus_320_624x351_afp.jpg.webp" class="img-fluid">
        </div>
        <div class="col-md-4">
            <img src="https://static.hosteltur.com/app/public/uploads/img/articles/2013/04/01/L_5c1a32f3edc8d_LAN_Airbus_A320_Sharklets___Fuente___Airbus_chica.jpg" class="img-fluid">
        </div>
        <div class="col-md-4">
            <img src="https://www.eluniverso.com/resizer/v2/346PW3NWJ5B2VEYM454CHJSO3Y.jpg?auth=28d25c9783d02b0a5e9a8255ef535f2c7f36d265d6a8b43c736a68c5153d7b3c&width=1005&height=670&quality=75&smart=true" class="img-fluid">
        </div>
    </div>
    
</section>

<br><br>

<footer class="text-center py-4" style="font-size: 20px; background-color:#1F3A5F; color:white;">
    © 2026 My Air Web - Juan Castrillon - Facultad de Ingenieria, Universidad de Cundinamarca
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>