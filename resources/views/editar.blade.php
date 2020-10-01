@extends('plantillas.dashboard') @section('titulo')

<h2 class="navbar-brand">Editar producto</h2>

@endsection @section('vista')

<div id="registrar" class="d-flex justify-content-center overflow-auto">
    <div class="card col-8 mt-5 bg-light">
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="codigo">Código</label>
                    <input
                        type="text"
                        class="form-control"
                        id="codigo"
                        disabled
                        value="#123"
                    />
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input
                        type="text"
                        class="form-control"
                        id="nombre"
                        value="Bicicleta Trek"
                    />
                </div>
                <div class="form-group">
                    <label for="categoria">Categoría</label>
                    <select class="form-control" id="categoria" disabled>
                        <option selected>Montaña</option>
                        <option>Ruta</option>
                        <option>Niño</option>
                        <option>Urbanas</option>
                        <option>Freestyle</option>
                        <option>Eléctricas</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="sucursal">Sucursal</label>
                    <select class="form-control" id="sucursal" disabled>
                        <option selected>Santiago</option>
                        <option>Valdivia</option>
                        <option>Punta Arenas</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea class="form-control" id="descripcion" rows="2">
Bicicleta de montaña de alta gama.</textarea
                    >
                </div>
                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input
                        type="number"
                        class="form-control"
                        id="cantidad"
                        disabled
                        value="2"
                    />
                </div>
                <div class="form-group">
                    <label for="precio">Precio venta</label>
                    <input
                        type="number"
                        class="form-control"
                        id="precio"
                        value="1600000"
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
