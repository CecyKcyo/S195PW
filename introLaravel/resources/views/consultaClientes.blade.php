@extends('layouts.plantilla1')
<!-- Extiende la plantilla base 'plantilla1' ubicada en el directorio 'layouts'.
     Esto permite que la vista herede la estructura y estilos de la plantilla base. -->

@section('titulo', 'Clientes')

@section('contenido')


<div class="container mt-5 col-md-8">
    <!-- Contenedor principal con clase 'container' de Bootstrap que añade padding y centra el contenido.
         - 'mt-5': Añade margen superior para separar el contenido de la parte superior de la página.
         - 'col-md-8': Define el ancho del contenedor a 8 columnas en pantallas medianas o más grandes, centrándolo. -->

    <div class="card text-justify font-monospace">
        <!-- Crea una tarjeta de Bootstrap para mostrar la información del cliente.
             - 'text-justify': Justifica el texto dentro de la tarjeta.
             - 'font-monospace': Aplica una fuente de ancho fijo al texto dentro de la tarjeta. -->

        <div class="card-header fs-5 text-primary">
            Ivan Isay Guerra
        </div>
        <!-- Cabecera de la tarjeta con el nombre del cliente.
             - 'fs-5': Define el tamaño de fuente como grande.
             - 'text-primary': Aplica color de texto azul, de acuerdo con los estilos de Bootstrap. -->

        <div class="card-body">
            <!-- Cuerpo de la tarjeta que contiene la información principal del cliente. -->
            <h5 class="fw-bold">ivan.guerra@outlook.com</h5>
            <!-- Correo del cliente con fuente en negrita ('fw-bold'). -->

            <h5 class="fw-medium">4424283836</h5>
            <!-- Número de teléfono del cliente con fuente en peso medio ('fw-medium'). -->

            <p class="card-text fw-lighter"> </p>
            <!-- Párrafo de texto adicional para la tarjeta, actualmente vacío.
                 - 'fw-lighter': Aplica un estilo de fuente más claro. -->
        </div>

        <div class="card-footer text-muted">
            <!-- Pie de la tarjeta que contiene los botones de acción. 
                 - 'text-muted': Aplica un estilo de texto desvanecido. -->

            <button type="submit" class="btn btn-warning btn-sm">Actualizar</button>
            <!-- Botón de Bootstrap con clase 'btn-warning' para indicar la acción de actualizar, en tamaño pequeño ('btn-sm'). -->

            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
            <!-- Botón de Bootstrap con clase 'btn-danger' para indicar la acción de eliminar, en tamaño pequeño ('btn-sm'). -->
        </div>
    </div>
  
</div> {{-- divcontainer --}}


@endsection

