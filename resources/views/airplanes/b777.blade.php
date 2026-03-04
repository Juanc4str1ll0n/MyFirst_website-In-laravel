<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Boeing 777</title>
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

<h1>Boeing 777</h1>
<a> <img width="1200" height="600" style="border-radius: 15px" class="d-block mx-auto" src="https://www.boeing.com/content/theboeingcompany/us/en/commercial/777/_jcr_content/root/container/section_2061534247/layout_container/layout_column/gallery/item_1763678854194.coreimg.jpeg/1765504330707/imagegallery-4.jpeg"></a>
<br>
<hr>
<section class="container my-5">
    <h2 class="text-center mb-4">Especificaciones Tecnicas</h2>

    <div class="row g-4">
        <div class="col-md-3">
            <div class="card spec-card p-3 text-center">
                <h3>Fabricante</h3>
                <p  style="font-size: 25px">Boeing</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card spec-card p-3 text-center">
                <h3>Capacidad</h3>
                <p  style="font-size: 25px">300 - 426 pasajeros</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card spec-card p-3 text-center">
                <h3>Alcance</h3>
                <p  style="font-size: 25px">13,450 km aprox.</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card spec-card p-3 text-center">
                <h3>Envergadura</h3>
                <p style="font-size: 25px">64,4 metros</p>
            </div>
        </div>
    </div>
</section>
    <h2 class="h2Historia">Historia</h2>
    <pre class="texto" id="texto" >
        El Boeing 777 es un avión comercial de fuselaje ancho desarrollado por Boeing en la década de 1990 con el objetivo de ofrecer una alternativa eficiente
        para vuelos de larga distancia con dos motores en lugar de cuatro. Fue diseñado en colaboración directa con varias aerolíneas internacionales, 
        convirtiéndose en uno de los primeros programas aeronáuticos en utilizar diseño completamente asistido por computadora. Su desarrollo marcó un avance
        significativo en la ingeniería moderna, permitiendo mayor precisión y optimización estructural.
    </pre>
    <br>
    <pre class="texto">
        El 777 realizó su primer vuelo en 1994 y rápidamente se posicionó como uno de los aviones más confiables y eficientes para rutas intercontinentales.
        Es reconocido por incorporar los motores bimotor más grandes del mundo y por su capacidad para operar vuelos de ultra larga distancia bajo normativas 
        ETOPS. A lo largo de los años ha evolucionado en distintas versiones, incluyendo el 777-300ER y el nuevo 777X, consolidándose como uno de los pilares
        fundamentales del transporte aéreo global gracias a su combinación de autonomía, capacidad y eficiencia operativa.
    </pre>

<section class="container">
    <h2 class="text-center mb-4">Galería</h2>
    
    <div class="row g-5">
        <div class="col-md-4">
            <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Cathay_Pacific_Boeing_777-200%3B_B-HNL%40HKG.jpg" class="img-fluid">
        </div>
        <div class="col-md-4">
            <img src="https://i.insider.com/594418a99a7af51b008b4d71?width=700" class="img-fluid">
        </div>
        <div class="col-md-4">
            <img src="https://i0.wp.com/www.nlarenas.com/wp-content/uploads/boeing-777X-777-9-pruebas-certificacion.jpeg?fit=1554%2C874&ssl=1" class="img-fluid">
        </div>
    </div>
    <br>
    <div class="row g-5">
        <div class="col-md-4">
            <img src="https://www.aeroermo.com/home/wp-content/uploads/2024/09/Emirates-Boeing-777-Bogota-Premium-Economy-1.jpg" class="img-fluid">
        </div>
        <div class="col-md-4">
            <img src="https://www.airline92.com/adjuntos/05%20A350%20VS%20777-X.webp" class="img-fluid">
        </div>
        <div class="col-md-4">
            <img src="https://www.aeroflap.com.br/wp-content/uploads/2017/06/Emirates-Boeing-777-300ER-_2_.jpg" class="img-fluid">
        </div>
    </div>
    
</section>

<br><br>

<footer class="text-center py-4" style="font-size: 20px; background-color:#1F3A5F; color:white; ">
    © 2026 My Air Web - Juan Castrillon - Facultad de Ingenieria, Universidad de Cundinamarca
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>