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
                            <h3>El aterrizaje imposible del Gimli Glider</h3>
                            <ul id="lista-accidentes"></ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h3>El Milagro del Hudson</h3>
                            <p>
                                card 2
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
