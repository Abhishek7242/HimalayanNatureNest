window.addEventListener("scroll", function () {
    const scrollContainers = document.querySelectorAll('.scroll-container');

    // Get the viewport height
    const windowHeight = window.innerHeight || document.documentElement.clientHeight;

    scrollContainers.forEach(container => {
        const rect = container.getBoundingClientRect();

        // Check if the container is within the viewport
        if (rect.top <= windowHeight - 100) {
            container.classList.add('show');
        } 
        // else {
        //     container.classList.remove('show'); // Optional: Remove the class if not in view
        // }
    });
});
window.addEventListener("DOMContentLoaded", function () {
    const scrollContainers = document.querySelectorAll('.scroll-container');

    // Get the viewport height
    const windowHeight = window.innerHeight || document.documentElement.clientHeight;

    scrollContainers.forEach(container => {
        const rect = container.getBoundingClientRect();

        // Check if the container is within the viewport
        if (rect.top <= windowHeight - 100) {
            container.classList.add('show');
        } 
        // else {
        //     container.classList.remove('show'); // Optional: Remove the class if not in view
        // }
    });
});
window.addEventListener("DOMContentLoaded", function () {
    const containers = document.querySelectorAll('.onload-container');  /* Fixed Selector */

    containers.forEach(container => {
        const rect = container.getBoundingClientRect();
        const windowHeight = window.innerHeight || document.documentElement.clientHeight;

        if (rect.top <= windowHeight - 100) {
            container.classList.add('onload');
        }
    });
});

