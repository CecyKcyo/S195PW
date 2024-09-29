@extends('layouts.plantilla1')
<!-- Esta directiva Blade extiende una plantilla base llamada 'plantilla1' ubicada en la carpeta 'layouts'. 
     Significa que esta vista heredará toda la estructura y el contenido de la plantilla base. -->

    @section('titulo', 'Formulario')
    <!-- Define una sección llamada 'titulo' que será sustituida en la plantilla base con el valor 'Formulario'. 
        Es útil para definir títulos específicos en cada vista que extienda la plantilla. -->

    @section('contenido')
    <!-- Define el inicio de la sección 'contenido'. 
        Aquí es donde se incluirá el contenido específico de esta vista que reemplazará o se añadirá en el espacio reservado 
        para la sección 'contenido' en la plantilla base 'plantilla1'. -->


@endsection
<!-- Cierra la sección 'contenido' definida anteriormente. -->




        {{-- formulario --}}
            <div class="container mt-5 col-md-6">
                <div class="card font-monospace">
                <div class="card-header fs-5 text-center text-primary">
                Registro de Clientes
                </div>
                <div class="card-body text-justify">
                <form>
                <div class="mb-3">
                <label for="nombre" class="form-label">Nombre: </label>
                <input type="text" class="form-control" id="nombre" >
                </div>
                <div class="mb-3">
                <label for="Apellido" class="form-label">Apellido: </label>
                <input type="text" class="form-control" id="apellido" >
                </div>
                <div class="mb-3">
                <label for="correo" class="form-label">Correo: </label>
                <input type="email" class="form-control" id="correo" >
                </div>
                <div class="mb-3">
                <label for="telefono" class="form-label">Telefono: </label>
                </div>
                <input type="number" class="form-control" id="telefono" >
                </div>
                <div class="card-footer text-muted">
                <div class="d-grid gap-2 mt-2 mb-1">
                <button type="submit" class="btn btn-success btn-sm"> Guardar Cliente </button>
                </div>
                </form>
                </div>
                </div>
                </div> {{--divcontainer--}}
        {{--Finaliza Tarjeta con formulario--}}

    @endsection
