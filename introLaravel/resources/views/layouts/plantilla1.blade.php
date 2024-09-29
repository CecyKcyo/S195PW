<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Configura el viewport para que la página se vea bien en dispositivos móviles. -->

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @Vite(['resources/js/app.js'])
    <!-- Directiva de Laravel para integrar el archivo de JavaScript compilado por Vite, el cual se encarga de gestionar los recursos estáticos del proyecto. -->

    <title>@yield('titulo')</title>
    <!-- Utiliza la directiva Blade 'yield' para incluir el título de la página. Esto permite que cada página hija pueda definir su propio título. -->
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Barra de navegación utilizando clases de Bootstrap. -->
        <div class="container-fluid">
            <!-- Contenedor para el contenido de la barra de navegación. -->
            <a class="navbar-brand" href="/inicio">Turista sin Maps</a>
            <!-- Enlace a la página de inicio con el nombre de la marca. -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Botón de toggling para mostrar y ocultar el menú en dispositivos móviles. -->
                <span class="navbar-toggler-icon"></span>
                <!-- Ícono del botón de toggling de Bootstrap. -->
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Contenedor colapsable para los elementos de la navegación, se despliega o colapsa en dispositivos móviles. -->
                <ul class="navbar-nav">
                    <!-- Lista de navegación. -->

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('formulario') }}">Registro de clientes</a>
                        <!-- Enlace a la ruta 'formulario' con la clase 'nav-link active' para mostrar que es la página actual. -->
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('consultaClientes') }}">Consultar clientes</a>
                        <!-- Enlace a la ruta 'consultaClientes' para consultar los registros de clientes. -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('contenido')
    <!-- Directiva Blade 'yield' para incluir el contenido específico de cada vista hija. Esto permite que cada vista hija defina su propio contenido dentro de esta sección. -->

</body>
</html>
