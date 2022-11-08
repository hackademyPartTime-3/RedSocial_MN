<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- cdn bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- links icons bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- link css propio -->

    <link href="{{ asset ('/css/app.css') }}" rel="stylesheet" />

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route ('home')}}">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('wall')}}">Ver</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('people')}}">Personas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('contact') }}">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('about') }}">Acerca de</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div style="margin-bottom: 80px" class="container-fluid">
        <!--el contenido de mis páginas -->
   
        @yield('content')        

    </div>

    <footer class="d-flex flex-wrap justify-content-between  py-3 border-top text-white bg-success fixed-bottom">
        <div class="col-md-4 d-flex align-items-center">
            <span class="mb-3 mb-md-0 fs-6 ps-3">© Manuel Noriega 2022</span>
        </div>

        <ul class="nav col-md-4 justify-content-center list-unstyled d-flex">
            <i class="bi bi-twitter   fs-6 ps-3"></i>
            <i class="bi bi-facebook  fs-6 ps-3"></i>
            <i class="bi bi-instagram fs-6 ps-3"></i>
            <i class="bi bi-whatsapp  fs-6 ps-3"></i>
        </ul>
    </footer>
</body>

</html>