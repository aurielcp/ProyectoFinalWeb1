// JavaScript para validar el formulario antes de enviarlo
document.querySelector("form").addEventListener("submit", function(event) {
    let inputs = document.querySelectorAll("input");
    let valid = true;

    // Verificar que todos los campos sean llenados
    inputs.forEach(function(input) {
        if (!input.value) {
            valid = false;
            input.style.borderColor = "red"; // Resalta en rojo los campos vacíos
        } else {
            input.style.borderColor = "#ddd"; // Reestablece el color si ya fue llenado
        }
    });

    if (!valid) {
        event.preventDefault(); // Previene el envío del formulario si hay campos vacíos
        alert("Por favor, completa todos los campos.");
    }
});
