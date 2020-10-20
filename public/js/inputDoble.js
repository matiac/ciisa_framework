function cambiarCampo() {
    const valor = document.getElementById('valor');
    const campo = document.getElementById('campo');
    const texto = document.getElementById('cambio-campo');

    switch (campo.value) {
        case 'name':
            valor.placeholder = 'Código';
            campo.value = 'code';
            texto.innerHTML = 'Buscar por nombre';
            break;

        case 'code':
            valor.placeholder = 'Nombre';
            campo.value = 'name';
            texto.innerHTML = 'Buscar por código';
            break;

        default:
            break;
    }
}
