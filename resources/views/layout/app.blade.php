<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del Usuario</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .navbar {
            background-color: rgba(0, 123, 255, 0.7); /* Fondo azul con opacidad */
        }

        .navbar-nav .nav-link:hover {
            background-color: rgba(0, 123, 255, 1); /* Azul más intenso al pasar el cursor */
            color: white;
        }

        .card {
            margin-top: 20px;
            text-align: center; /* Centrar el texto dentro de la card */
        }

        .card img {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <header>
        <!-- Barra de navegación -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand text-white" href="{{ url('/perfil') }}">Mi Perfil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('/perfil') }}">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('/perfil/intereses') }}">Intereses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('/perfil/habilidades') }}">Habilidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('/perfil/metas') }}">Metas</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    
    <main class="container mt-4">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
