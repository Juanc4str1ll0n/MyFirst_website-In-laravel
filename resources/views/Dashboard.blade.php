<!doctype html>
<html lang="en">
    <head>
        <title>Dashboard My Air Web</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="{{ asset('css/dash.css') }}">
        <link rel="icon" type="image/png" href="{{ asset('imgs/logo_icono.png') }}">
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#1F3A5F; font-size:50px">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center gap-3">
                        <span class="texto-bienvenida">Bienvenido, {{ auth()->user()->name?? 'Usuario' }}</span>
                    </div>

                    <!-- Centro -->
                    <div class="mx-auto">
                        <span class="navbar-brand mb-0">
                            My Air Web
                        </span>
                    </div>

                    <!-- Logout-->
                    <div>
                        <form action="{{ route('logout') }}" method="POST" >
                            @csrf
                            <button type="submit" class="btn-primary">Cerrar Sesion</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-md-3">
                        <img width="300px" height="300px"  src="{{ asset('imgs/logo1.png') }}">
                    </div>
                    <div class="col-md-9">
                        <h1 > MY AIR WEB - VIP SECTION</h1>
                    </div>
                </div>
            </div>
            <hr>

            <h2 class="titulo2">Crecimiento aereo en los proximos años</h2>

            <div class="row g-5 justify-content-center">
             <div class="col-md-8">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <img src="https://www.oneair.es/wp-content/uploads/2024/07/demanda-global-de-nuevos-aviones-en-la-flota-mundial-por-regiones.jpg" class="img-fluid" alt="grafico de crecimiento en aviacion">
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <hr>

            <h2 class="titulo2"> Seguridad aerea</h2>


            <div class="row g-5 justify-content-center">
                <div class="col-md-5">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h2 id="titulo-card" style="text-align: center">Accidentes Aereos Recientes</h2>
                            <ul id="lista-accidentes"></ul>
                            <img src="https://www.aviacionnews.com/wp-content/uploads/2024/02/safety-rates-1.png" class="img-fluid" alt="grafico de accidentes aereos">
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="card shadow h-100">
                        <div class="card-body text-center">
                            <h2 id="titulo-card">¿Qué tan seguro es viajar?</h2>
                            <p class="texto-card">
                                Viajar en avión es uno de los medios de transporte más seguros del mundo.
                                La aviación comercial está respaldada por estrictas normas internacionales,
                                mantenimiento constante de las aeronaves y una formación altamente especializada
                                para pilotos y tripulación. Organismos como la Organización de Aviación Civil
                                Internacional establecen estándares globales que deben cumplir las aerolíneas y
                                los países para garantizar la seguridad aérea.
                            </p>
                            <hr>
                            <img src="https://media.cnn.com/api/v1/images/stellar/prod/cnne-2218f4a5-130708164201-tsr-asiana-plane-getty-story-top.jpg?c=16x9&q=h_833,w_1480,c_fill" alt="img accidente" class="img-fluid">
                            <hr>
                            <p class="texto-card">
                                Además, los aviones modernos incorporan sistemas redundantes,
                                lo que significa que si un sistema falla, otro entra en funcionamiento automáticamente.
                                Aeronaves como el Airbus A320 o el Boeing 737 están diseñadas para seguir operando incluso
                                ante múltiples fallos técnicos, lo que reduce considerablemente los riesgos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <hr>

            <!--Seccion 2-->
            <h2 class="titulo2">Noticias aereas</h2>

            <div class="row justify-content-center">
                <div class="col-md-5">
                        <div class="card shadow h-100">
                            <div class="card-body text-center noticia-card">
                                <h2 id="titulo-card">¿Falta de controladores aereos en Bogota?</h2>
                                <img src="https://i.ytimg.com/vi/10k4g4UaJ_k/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLA3JTP6j1ElYZiRx4m4bAQ7syrNrw" class="img-fluid" alt="noticia">
                                <div class="info-noticia">
                                    <p style="font-size: 25px">La escasez de controladores aéreos en Bogotá ha generado retrasos en varios vuelos, 
                                        afectando a miles de pasajeros...
                                    </p>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-md-6">
                    <div class="card-shadow h-100">
                        <div class="card-body text-center noticia card">
                            <h2 id="titulo-card"> Deficiencia de software en aviones</h2>
                            <img src="https://i.ytimg.com/vi/elOHB3JFasw/maxresdefault.jpg" alt="software afectando aviones">
                        </div>
                    </div>
                </div>

            </div>

        </main>
        <footer class="text-center py-4" style="font-size: 20px; background-color:#1F3A5F; color:white;">
            © 2026 My Air Web - Juan Castrillon - Facultad de Ingenieria, Universidad de Cundinamarca
        </footer>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        <script src="{{ asset('asset/js/accidentes.js') }}"></script>
    </body>
</html>
