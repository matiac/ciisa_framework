@extends('plantillas.general') @section('contenido')

<div class="h-100 d-flex flex-column justify-content-center">
    <h1 class="text-center mb-4">Software de Gestión de Stock</h1>
    <div class="d-flex flex-column justify-content-center align-items-center">
        @error('invalid')
        <div
            class="alert alert-danger alert-dismissible fade show"
            role="alert"
        >
            {{ $message }}
            <button
                type="button"
                class="close"
                data-dismiss="alert"
                aria-label="Close"
            >
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @enderror

        <div class="col-md-3">
            <div class="card bg-light">
                <div class="card-header bg-dark text-white">
                    <h4 class="card-title">Inicio Sesión</h4>
                </div>
                <div class="card-body">
                    <form
                        onsubmit="return validaLogin()"
                        method="POST"
                        action="/login"
                        id="login"
                        novalidate
                    >
                        @csrf

                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <input
                                type="text"
                                class="form-control"
                                name="name"
                                id="usuario"
                            />
                        </div>
                        <div class="form-group">
                            <label for="clave">Contraseña</label>
                            <input
                                type="password"
                                class="form-control"
                                name="password"
                                id="clave"
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
