@extends('plantillas.dashboard') @section('titulo')

<h2 class="navbar-brand">Consultar producto</h2>

@endsection @section('vista')

<div id="filtro" class="d-flex justify-content-center p-2 m-4">
    <form onsubmit="return validaConsulta()" method="GET" action="/products" class="form-inline align-items-start">
        @csrf

        <div>
            <label class="sr-only" for="codigo">Valor</label>
            <input
                type="text"
                class="form-control mr-sm-2"
                id="valor"
                name="valor"
                placeholder="Nombre"
            />
            <a href="#" id="cambio-campo" onclick="cambiarCampo()">Buscar por código</a>
        </div>

        <input type="hidden" id="campo" name="campo" value="name">

        <div class="form-group">
            <label class="sr-only" for="sucursal">Sucursal</label>
            <select class="form-control mr-sm-2" id="sucursal" name="sucursal">
                @foreach ($stores as $store)
                    <option value="{{ $store->id }}">
                        {{ $store->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Buscar</button>
    </form>
</div>

<div id="resultados" class="d-flex justify-content-center">
    <div class="accordion col-8" id="acordeon">
        @foreach ($products as $i => $product)
            <div class="card">
                <div
                    class="card-header d-flex justify-content-between align-items-center"
                    id={{ "heading$i" }}
                >
                    <div class="d-flex align-items-center">
                        <span>{{ $product->code }}</span>

                        <button
                            class="btn btn-link"
                            type="button"
                            data-toggle="collapse"
                            data-target={{ "#collapse$i" }}
                            aria-expanded="false"
                            aria-controls={{ "collapse$i" }}
                        >
                            {{ $product->name }}
                        </button>

                        <span>{{ $product->store->name }}</span>
                    </div>

                    <div class="controles">
                        <a href={{ "/products/$product->id/edit" }}>
                            <img src="/img/edit.svg" alt="editar" class="mr-2" />
                        </a>
                        <form action={{ "/products/$product->id" }} method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            
                            <button type="submit" class="boton-link">
                                <img src="/img/delete.svg" alt="eliminar" />
                            </button>
                        </form>
                    </div>
                </div>

                <div
                    id={{ "collapse$i" }}
                    class="collapse"
                    aria-labelledby={{ "heading$i" }}
                    data-parent="#acordeon"
                >
                    <div class="card-body py-2">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Id: {{ $product->id }}</li>
                            <li class="list-group-item">Categoría: {{ $product->category->name }}</li>
                            <li class="list-group-item">
                                Descripción: {{ $product->description }}
                            </li>
                            <li class="list-group-item">Cantidad: {{ $product->stock }}</li>
                            <li class="list-group-item">
                                Precio venta: ${{ $product->price }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script src="/js/inputDoble.js"></script>

@endsection
