@extends('plantillas.general') @section('contenido')

<div class="h-100 d-flex flex-column justify-content-center">
    <h1 class="text-center mb-4">Software de Gestión de Stock</h1>
    <div class="d-flex justify-content-center">
        <div class="col-md-3">
            <div class="card bg-light">
                <div class="card-header bg-dark text-white">
                    <h4 class="card-title">Inicio Sesión</h4>
                </div>
                <div class="card-body">
                    <form action="" id="login">
                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <input
                                type="text"
                                class="form-control"
                                name="usuario"
                                id=""
                            />
                        </div>
                        <div class="form-group">
                            <label for="contraseña">Contraseña</label>
                            <input
                                type="password"
                                class="form-control"
                                name="contraseña"
                                id=""
                            />
                        </div>
                    </form>
                </div>
                <div class="card-footer bg-dark">
                    <button
                        type="submit"
                        class="btn btn-success float-right"
                        form="login"
                    >
                        Ingresar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
