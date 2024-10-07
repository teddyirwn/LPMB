document.addEventListener("DOMContentLoaded", () => {
    document.addEventListener("DOMContentLoaded", function () {
        const Hburger = document.getElementById("navbar-burger");
        const menu = document.getElementById("navbar-menu");

        Hburger.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    });

    const inputImage = document.querySelectorAll(".input-image");

    for (let i = 0; i < inputImage.length; i++) {
        console.log(inputImage[i]);
    }
});
