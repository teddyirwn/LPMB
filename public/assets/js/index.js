document.addEventListener("DOMContentLoaded", function () {
    const Hburger = document.getElementById("navbar-burger");
    const menu = document.getElementById("navbar-menu");

    Hburger.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
});
