@extends('plantillas.general') @section('contenido')

<div class="row h-100 m-0">
    <div
        id="barra-lateral"
        class="col-2 bg-dark text-white h-100 d-flex flex-column"
    >
        <div id="logo">
            <h4 class="text-center pt-3">Gestor de Stock</h4>
        </div>

        <div
            id="menu"
            class="flex-grow-1 d-flex flex-column justify-content-center"
        >
            <div id="opciones">
                <a href="/products">Consultar</a>
                <a href="/products/create">Registrar</a>
            </div>
        </div>
    </div>

    <div id="sec-derecha" class="col-10 p-0 d-flex flex-column">
        <nav id="navbar" class="navbar navbar-light bg-light">
            @yield('titulo')

            <div class="dropdown">
                <button
                    class="btn btn-outline-secondary dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                >
                    Usuario
                </button>
                <div
                    class="dropdown-menu dropdown-menu-right"
                    aria-labelledby="dropdownMenuButton"
                >
                    <a class="dropdown-item" href="#">Cerrar sesión</a>
                </div>
            </div>
        </nav>

        <div id="contenido" class="overflow-auto">@yield('vista')</div>
    </div>
</div>

@endsection
