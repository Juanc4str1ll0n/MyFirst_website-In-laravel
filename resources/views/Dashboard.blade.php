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
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#1F3A5F;">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center gap-3">
                        <span class="text-white fw-light">Bienvenido,</span>
                        <span class="text-white fw-bold" id="user_name">Carlitos</span>
                    </div>

                    <!-- Centro -->
                    <div class="mx-auto">
                        <span class="navbar-brand mb-0 h1 text-white">
                            My Air Web - Dashboard VIP
                        </span>
                    </div>

                    <!-- Lado derecho-->
                    <div>
                        <a href="#" class="btn btn-outline-light btn-sm">
                            Cerrar sesión
                        </a>
                    </div>
                </div>
            </nav>
        </header>
        <main>

            <br><br>
            <div class="row g-5 justify-content-center">
                <div class="col-md-5">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h2 id="titulo-card">Accidentes Aereos Recientes</h2>
                            <ul id="lista-accidentes"></ul>
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
        </main>
        <footer>
          
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
