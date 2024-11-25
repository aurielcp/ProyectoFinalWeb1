document.addEventListener("DOMContentLoaded", () => {
    // Referencia a los inputs
    const inputs = document.querySelectorAll("input[type='text']");
    const button = document.querySelector("button");

    // Efecto visual al ingresar datos
    inputs.forEach(input => {
        input.addEventListener("focus", () => {
            input.style.backgroundColor = "#e6e6fa"; // Fondo lavanda
        });

        input.addEventListener("blur", () => {
            input.style.backgroundColor = ""; // Vuelve al color original
        });
    });

    // Animación del botón al hacer clic
    button.addEventListener("click", () => {
        button.style.transform = "scale(0.95)"; // Reducir ligeramente
        setTimeout(() => {
            button.style.transform = "scale(1)"; // Volver a tamaño normal
        }, 100);
    });
});
