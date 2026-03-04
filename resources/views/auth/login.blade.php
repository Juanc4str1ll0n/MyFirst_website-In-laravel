<!doctype html>
<html lang="en">
    <head>
        <title>Log In</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="icon" type="image/png" href="{{ asset('imgs/logo_icono.png') }}">
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    </head>

    <body>
        <a href="/" class="home-logo">
            <img style= "width: 160px; height:160px" src="{{ asset('imgs/logo1.png') }}" alt="Home">
        </a>
        <main>
            
            <!--D-FLEX es ima forma de prhamozar e;e,emtps de manera flexible-->
            <!--VH-100 altura de la ventana del navegador significa que el contenedor ocupa el 100% de la ventana-->
            <div class="d-flex justify-content-center align-items-center">
                <div class="card" style="width: 500px">
                    <div class="card-body">
                        <img src="{{ asset('imgs/logo_3.png') }}" class="img-fluid" alt="logo my air web">
                        <h3 style="padding-left:120px">LOGIN</h3>
                        <br><br>
                        <form method="POST"  action="{{ route('login.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input value="{{ old('email') }}" class="form-control" type="email" name="email" placeholder="ejemplo@gmail.com" required>
                            </div>

                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="password" required >
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                ERROR
                            </div>
                        @endif
                        </form>
                    </div>
                </div>
            </div>
        
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
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
    </body>
</html>
