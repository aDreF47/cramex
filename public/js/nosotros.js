document.addEventListener("DOMContentLoaded", function () {
    AOS.init({
        duration: 1000, // Duración de la animación
        once: true // Solo animar una vez al hacer scroll
    });

    // Ajuste de desplazamiento para evitar que el navbar tape la sección
    document.querySelectorAll("a[href^='#']").forEach(anchor => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();

            let targetElement = document.querySelector(this.getAttribute("href"));

            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
            }
        });
    });
});
