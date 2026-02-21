<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>My Air Web</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#1F3A5F;">
  <div class="container">
    <a class="navbar-brand" href="#">La pagina en donde te convertiras en un aviation Lover !</a>
    <div>
      <a class="nav-link d-inline text-white" href="#">Inicio</a>
      <a class="nav-link d-inline text-white" href="#">Aviones</a>
      <a class="nav-link d-inline text-white" href="#carouselExampleSlidesOnly">Carrusel</a>
      <a class="nav-link d-inline text-white" href="#">Historias fascinantes</a>
    </div>
  </div>
</nav>
    <h1 > MY AIR WEB</h1>
    <br>
    <hr>
    <h2 class="titulo2">Aviones comunmente usados en la actualidad</h2>

    <div class="container" id="container1">
    <div class="row g-5">
        <div class="col">
        <a href="/a320"> <img src="{{ asset('imgs/a320.jpg') }}" class="img-fluid"> </a>
        </div>
        <div class="col">
        <a href="a350"><img src="{{ asset('imgs/a350.png') }}" class="img-fluid"> </a>
        </div>
        <div class="col">
        <a href="a380"><img src="{{ asset('imgs/a380.jpeg') }}" class="img-fluid"> </a>
        </div>
    </div>
    <br>
    <br>
    <div class="row g-5">
        <div class="col">
        <a href="/b737"><img src="{{ asset('imgs/737.jpg') }}"> </a>
        </div>
        <div class="col">
        <a href="/b747"><img src="{{ asset('imgs/747.jpg') }}"> </a>
        </div>
        <div class="col">
        <a href="/b777"> <img src="{{ asset('imgs/777.jpg') }}"> </a>
        </div>
    </div>
    <br>
    <br><br>
    <div class="row g-5">
        <div class="col">
        <a href="/atr72"><img  src="{{ asset('imgs/atr72.jpeg') }}"></a>
        </div>
        <div class="col">
        <a href="/embraer"><img src="{{ asset('imgs/embraer.jpg') }}"></a>
        </div>
        <div class="col">
        <a href="/beluga"><img  src="{{ asset('imgs/beluga.jpg') }}"></a>
        </div>
    </div>

    </div>

    <br><br>
    <hr>
    <h2 class="titulo3">Imagenes historicas en la aviacion</h2>
    <div class="container my-5">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{ asset('imgs/historic/concorde.jpg') }}" class="d-block w-100" alt="concorde" >  <!--alt es un texto alternativo-->
        </div>
        <div class="carousel-item">
        <img src="{{ asset('imgs/historic/dc3.jpg') }}" class="d-block w-100" alt="dc3" >
        </div>
        <div class="carousel-item">
        <img src="{{ asset('imgs/historic/747Tigre.jpg') }}" class="d-block w-100" alt="747" >
        </div>
        <div class="carousel-item">
        <img src="{{ asset('imgs/historic/concordellamas.png') }}" class="d-block w-100" alt="concorde en llamas" >
        </div>
        <div class="carousel-item">
        <img src="{{ asset('imgs/historic/img1.webp') }}" class="d-block w-100" alt="a320" >
        </div>
        <div class="carousel-item">
        <img src="{{ asset('imgs/historic/mh370.jpg') }}" class="d-block w-100" alt="vuelo mh370" >
        </div>
        <div class="carousel-item">
        <img src="{{ asset('imgs/historic/x15.jpg') }}" class="d-block w-100" alt="x-15" >
        </div>
        <div class="carousel-item">
        <img src="{{ asset('imgs/historic/antonovan225.jpg') }}" class="d-block w-100" alt="antonov an 225" >
        </div>
    </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>
<br>
<hr>
    <h2 class="titulo3">Historias Fascinantes</h2>
<section class="container">
    <div class="row g-5">
        <div class="col-md-6">
            <div class="card shadow h-100">
                <img src="https://cloudfront-us-east-1.images.arcpublishing.com/infobae/BSBWF6DTE5AK3ECL4ANVBZPY3Y.jpg">
                <div class="card-body">
                    <h3>El aterrizaje imposible del Gimli Glider</h3>
                    <p>
                        En 1983, un avión de Air Canada se quedó completamente sin combustible a más de 12.000 metros de altura.
                        a mitad del trayecto, los motores se apagaron uno por uno, el problema fue un error en el cálculo del combustible. 
                        El capitán Robert Pearson en lugar de entrar en pánico, convirtió el avión en el planeador más grande del mundo.
                        Dirigió la aeronave hacia una antigua base aérea en Gimli, y sin motores, sin electricidad, sin instrumentos normales
                        el avion aterrizo con exito y no murió nadie..
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow h-100">
                <img src="https://media.cnn.com/api/v1/images/stellar/prod/cnne-605188-10-anos-del-milagro-del-hudson.jpg?c=original" class="card-img-top img-fluid">
                <div class="card-body">
                    <h3>El Milagro del Hudson</h3>
                    <p>
                        En 2009, un Airbus A320 realizó un amerizaje de emergencia en el río Hudson tras perder ambos motores
                        pocos minutos despues del despegue debido a un impacto con una bandada de aves.
                        Ante la imposibilidad de regresar al aeropuerto y con muy poco tiempo para reaccionar, el capitan 
                        Chesley Sullenberger tomo la decision de planear la aeronave y posarla sobre al agua con una excelente 
                        precision. Gracias a la pericia del capitán "Sully", las 155 personas a bordo sobrevivieron.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow h-100">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeoIGWBaVYApL0TTU-fjBLA7hRXJ_kNCcvjA&s" class="card-img-top img-fluid">
                <div class="card-body">
                    <h3>El Puente Aéreo de Berlín</h3>
                    <p>
                        Tras la Segunda Guerra Mundial, cientos de aviones aliados transportaron alimentos, carbón y suministros
                        esenciales a Berlín Occidental durante el bloqueo impuesto por la Unión Soviética en 1948. La operación, 
                        conocida como el Berlin Airlift, se convirtió en una de las mayores hazañas logísticas de la historia de 
                        la aviación. Durante casi un año, aeronaves estadounidenses y británicas aterrizaban cada pocos minutos 
                        en los aeropuertos de Tempelhof y Gatow, enfrentando condiciones climáticas adversas y una presión política 
                        extrema. Gracias a estas operaciones aéreas continuas, se lograron entregar millones de toneladas de suministros, 
                        manteniendo con vida a más de dos millones de personas.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow h-100">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkjUqAYxxeDpPGwfEWe2ZZQ_QjyhxGWdDeyA&s">
                <div class="card-body">
                    <h3>Aloha Airlines Flight 243</h3>
                    <p>
                        En 1988 un Boeing 737 de Aloha Airlines realizaba un vuelo corto entre islas en Hawai, pero a unos
                        7300 metros de altura ocurrio algo que parecia sacado de una pelicula; Una seccion completa del techo 
                        del avion se desprendio, la cabina quedo expuesta al aire exterior a mas de 800km/h. 
                        Milagrosamente, los pilotos lograron mantener el control del avión.
                        La comandante, la capitana Madeline “Mimi” Tompkins, realizó un descenso de emergencia y logró aterrizar 
                        en el aeropuerto de Kahului, con esto la mayoría de los pasajeros sobrevivieron.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</html>