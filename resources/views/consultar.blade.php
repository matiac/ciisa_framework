@extends('plantillas.dashboard') @section('titulo')

<h2 class="navbar-brand">Consultar producto</h2>

@endsection @section('vista')

<div id="filtro" class="d-flex justify-content-center p-2 m-4">
    <form class="form-inline">
        <label class="sr-only" for="codigo">Código</label>
        <input
            type="text"
            class="form-control mb-2 mr-sm-2"
            id="codigo"
            placeholder="Código"
        />

        <label class="sr-only" for="nombre">Nombre</label>
        <input
            type="text"
            class="form-control mb-2 mr-sm-2"
            id="nombre"
            placeholder="Nombre"
        />

        <div class="form-group">
            <label class="sr-only" for="sucursal">Sucursal</label>
            <select class="form-control mb-2 mr-sm-2" id="sucursal">
                <option selected disabled>Sucursal</option>
                <option>Santiago</option>
                <option>Valdivia</option>
                <option>Punta Arenas</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success mb-2">Submit</button>
    </form>
</div>

<div id="resultados" class="d-flex justify-content-center">
    <div class="accordion col-8" id="acordeon">
        <div class="card">
            <div
                class="card-header d-flex justify-content-between align-items-center"
                id="heading1"
            >
                <div class="d-flex align-items-center">
                    <span>#123</span>

                    <button
                        class="btn btn-link"
                        type="button"
                        data-toggle="collapse"
                        data-target="#collapse1"
                        aria-expanded="false"
                        aria-controls="collapse1"
                    >
                        Bicicleta Trek
                    </button>

                    <span>Santiago</span>
                </div>

                <div class="controles">
                    <a href="/editar">
                        <img src="/img/edit.svg" alt="editar" class="mr-2" />
                    </a>
                    <a href="#1">
                        <img src="/img/delete.svg" alt="eliminar" />
                    </a>
                </div>
            </div>

            <div
                id="collapse1"
                class="collapse"
                aria-labelledby="heading1"
                data-parent="#acordeon"
            >
                <div class="card-body py-2">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Id: 1</li>
                        <li class="list-group-item">Categoría: bicicletas</li>
                        <li class="list-group-item">
                            Descripción: bicicleta de montaña de alta gama.
                        </li>
                        <li class="list-group-item">Cantidad: 2</li>
                        <li class="list-group-item">
                            Precio venta: $1.600.000
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card">
            <div
                class="card-header d-flex justify-content-between align-items-center"
                id="heading2"
            >
                <div class="d-flex align-items-center">
                    <span>#124</span>

                    <button
                        class="btn btn-link"
                        type="button"
                        data-toggle="collapse"
                        data-target="#collapse2"
                        aria-expanded="false"
                        aria-controls="collapse2"
                    >
                        Bicicleta Giant
                    </button>

                    <span>Valdivia</span>
                </div>

                <div class="controles">
                    <a href="/editar">
                        <img src="/img/edit.svg" alt="editar" class="mr-2" />
                    </a>
                    <a href="#1">
                        <img src="/img/delete.svg" alt="eliminar" />
                    </a>
                </div>
            </div>

            <div
                id="collapse2"
                class="collapse"
                aria-labelledby="heading2"
                data-parent="#acordeon"
            >
                <div class="card-body py-2">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Id: 2</li>
                        <li class="list-group-item">Categoría: bicicletas</li>
                        <li class="list-group-item">
                            Descripción: bicicleta pistera de alta gama.
                        </li>
                        <li class="list-group-item">Cantidad: 1</li>
                        <li class="list-group-item">
                            Precio venta: $1.200.000
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
