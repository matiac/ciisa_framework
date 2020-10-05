function validaLogin() {
    const usuario = document.getElementById('usuario');
    const clave = document.getElementById('clave');

    if ((usuario.value.length == 0) | /\s/.test(usuario.value)) {
        alert('Por favor ingrese un usuario válido');
        usuario.focus();
        return false;
    } else if ((clave.value.length == 0) | /\s/.test(clave.value)) {
        alert('Contraseña inválida');
        clave.focus();
        return false;
    }
}

function validaConsulta() {
    const codigo = document.getElementById('codigo');
    const nombre = document.getElementById('nombre');

    if (codigo.value.length == 0 && nombre.value.length == 0) {
        alert('Por favor ingrese código o nombre del producto');
        codigo.focus();
        return false;
    } else if (/\s/.test(codigo.value)) {
        alert('Por favor ingrese un código válido');
        codigo.focus();
        return false;
    }
}

function validaProducto() {
    const codigo = document.getElementById('codigo');
    const nombre = document.getElementById('nombre');
    const descripcion = document.getElementById('descripcion');
    const cantidad = document.getElementById('cantidad');
    const precio = document.getElementById('precio');

    if ((codigo.value.length == 0) | /\s/.test(codigo.value)) {
        alert('Por favor ingrese un codigo válido');
        codigo.focus();
        return false;
    } else if (nombre.value.length == 0) {
        alert('Por favor ingrese un nombre');
        nombre.focus();
        return false;
    } else if (descripcion.value.length == 0) {
        alert('Por favor ingrese una descripción');
        descripcion.focus();
        return false;
    } else if (
        (cantidad.value.length == 0) |
        /\s/.test(cantidad.value) |
        isNaN(cantidad.value) |
        (cantidad.value < 0)
    ) {
        alert('Por favor ingrese una cantidad válida');
        cantidad.focus();
        return false;
    } else if (
        (precio.value.length == 0) |
        /\s/.test(precio.value) |
        isNaN(precio.value) |
        (precio.value < 0)
    ) {
        alert('Por favor ingrese un precio válido');
        precio.focus();
        return false;
    }
}
