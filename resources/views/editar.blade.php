@php
    use App\Models\Category;
    use App\Models\Store;

    $categories = Category::all();
    $stores = Store::all();
@endphp

@extends('plantillas.dashboard') @section('titulo')

<h2 class="navbar-brand">Editar producto</h2>

@endsection @section('vista')

<div id="registrar" class="d-flex justify-content-center overflow-auto">
    <div class="card col-8 mt-5 bg-light">
        <div class="card-body">
            <form onsubmit="return validaProducto()" method="POST" action="{{ "/products/$product->id" }}">
                @method('PUT')
                @csrf

                <input type="hidden" name="id" value="{{ $product->id }}">

                <div class="form-group">
                    <label for="codigo">Código</label>
                    <input
                        type="text"
                        class="form-control"
                        id="codigo"
                        name="code"
                        disabled
                        value="{{ $product->code }}"
                    />
                </div>

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input
                        type="text"
                        class="form-control"
                        id="nombre"
                        name="name"
                        value="{{ $product->name }}"
                    />
                </div>

                <div class="form-group">
                    <label for="categoria">Categoría</label>
                    <select class="form-control" id="categoria" name="category_id" disabled>
                        <option value="{{ $product->category->id }}" selected>
                            {{ $product->category->name }}
                        </option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="sucursal">Sucursal</label>
                    <select class="form-control" id="sucursal" name="store_id" disabled>
                        <option value="{{ $product->store->id }}" selected>
                            {{ $product->store->name }}
                        </option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="description" rows="2">{{ $product->description }}</textarea
                    >
                </div>

                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input
                        type="number"
                        class="form-control"
                        id="cantidad"
                        name="stock"
                        disabled
                        value="{{ $product->stock }}"
                    />
                </div>

                <div class="form-group">
                    <label for="precio">Precio venta</label>
                    <input
                        type="number"
                        class="form-control"
                        id="precio"
                        name="price"
                        value="{{ $product->price }}"
                    />
                </div>

                <button type="submit" class="btn btn-success float-right">
                    Guardar
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
