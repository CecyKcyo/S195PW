<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
<!-- Directiva de Laravel Blade para cargar el archivo de JavaScript 'app.js' ubicado en 'resources/js'. 
     Vite es el gestor de activos que compila y optimiza los recursos como JavaScript y CSS en Laravel. 
     Esta directiva asegura que el archivo se incluya en la página correctamente. -->

    <title>Inicio</title>
</head>
<body>
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh; text-align: center; ">
        <div>
            <h1>Bienvenido querido Turista</h1>
            <h5>presiona el boton para iniciar...</h5>
            <a href="{{ route('formulario') }}" class="btn btn-primary">Ir al registro</a>
            <!-- Enlace con estilo de botón que redirige a la ruta 'formulario'.
                 - 'href="{{ route('formulario') }}"': Utiliza la función de Laravel `route` para generar dinámicamente la URL a la ruta llamada 'formulario'.
                 - 'class="btn btn-primary"': Aplica las clases de Bootstrap para darle apariencia de botón con el estilo 'btn-primary'. 
                 Al hacer clic en el enlace, el usuario será redirigido a la página de registro de clientes. -->        </div>
    </div>
</body>
</html>
