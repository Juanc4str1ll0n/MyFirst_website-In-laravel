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
    <h1 > MY AIR WEB</h1>
    <br>

    <h2 class="titulo2">Aviones modernos usados en la actualidad</h2>

    <div class="container" id="container1">
    <div class="row g-5">
        <div class="col">
        <img src="{{ asset('imgs/a320.jpg') }}">
        </div>
        <div class="col">
        <img src="{{ asset('imgs/a350.png') }}">
        </div>
        <div class="col">
        <img src="{{ asset('imgs/a380.jpeg') }}">
        </div>
    </div>
    <br>
    <br>
    <div class="row g-5">
        <div class="col">
        <img src="{{ asset('imgs/737.jpg') }}">
        </div>
        <div class="col">
        <img src="{{ asset('imgs/747.jpg') }}">
        </div>
        <div class="col">
        <img src="{{ asset('imgs/777.jpg') }}">
        </div>
    </div>
    <br>
    <br><br>
    <div class="row g-5">
        <div class="col">
        <img src="{{ asset('imgs/atr72.jpeg') }}">
        </div>
        <div class="col">
        <img src="{{ asset('imgs/embraer.jpg') }}">
        </div>
        <div class="col">
        <img src="{{ asset('imgs/beluga.jpg') }}">
        </div>
    </div>

    </div>

    <br><br>

    <h2 class="titulo3">Imagenes historicas en la aviacion</h2>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('imgs/historic/concorde.jpg') }}" class="d-block w-100" alt="concorde" >  <!--alt es un texto alternativo-->
    </div>
    <div class="carousel-item">
      <img src="{{ asset('imgs/historic/dc3.jpg') }}" class="d-block w-100" alt="dc3" >
    </div>
    <div class="carousel-item">
      <img src="{{ asset('imgs/a320.jpg') }}" class="d-block w-100" alt="a320" >
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

<br>
<p> xd</p>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</html>