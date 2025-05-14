document.addEventListener("DOMContentLoaded", function () {
    const fadeIns = document.querySelectorAll(".fade-in");

    function checkVisibility() {
        fadeIns.forEach((section) => {
            const rect = section.getBoundingClientRect();
            if (rect.top < window.innerHeight - 100) {
                section.classList.add("visible");
            }
        });
    }

    window.addEventListener("scroll", checkVisibility);
    checkVisibility();
});
