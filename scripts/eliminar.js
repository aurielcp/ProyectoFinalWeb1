// Validar que el número de cuenta solo tenga números
function validarNumeroDeCuenta(event) {
    const input = event.target;
    const valor = input.value;
    const regex = /^[0-9]*$/; // Solo números
    if (!regex.test(valor)) {
        alert("El número de cuenta debe contener solo dígitos.");
        input.value = valor.slice(0, -1); // Eliminar el último carácter no válido
    }
}

// Confirmación antes de eliminar
function confirmarEliminacion(event) {
    const confirmacion = confirm("¿Estás seguro de que deseas eliminar este usuario?");
    if (!confirmacion) {
        event.preventDefault(); // Cancela el envío del formulario
    }
}
