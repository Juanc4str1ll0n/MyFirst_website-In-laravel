<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-body p-4">

                    <h3 class="text-center mb-4">Crear Cuenta</h3>

                    <form method="POST" action="{{ route('register.store') }}">
                        @csrf

                        <!--mb = margin bottom-->
                        <!--el old sirve para si el usuario recarga pagina no se pierde lo que escribio en el form -->
                        <div class="mb-3">
                            <label for='name'>Nombre</label>
                            <input type="text" class="form-control" value="{{ old('name') }}" name="name"  placeholder="Nombre completo" required>
                        </div>

                        
                        <div class="mb-3">
                            <label for='email'>Correo electrónico</label>
                            <input type="email" class="form-control" value="{{ old('email') }}" name="email"  placeholder="ejemplo@gmail.com" required>
                        </div>

                        
                        <div class="mb-3">
                            <label for='password'>Contraseña</label>
                            <input type="password" class="form-control" name="password" placeholder="Minimo 8 caracteres" required>
                        </div>

                        <div class="mb-3">
                            <label for='password-confirmation'>Confirmar contraseña</label>
                            <input type="password" placeholder="confirmar contraseña" name="password_confirmation" class="form-control" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Registrarse
                            </button>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                ERROR
                            </div>
                        @endif

                    </form>

                    <p class="text-center mt-3">
                        ¿Ya tienes cuenta?
                        <a href="/login">Inicia sesión</a>
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>