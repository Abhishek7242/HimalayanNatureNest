document.addEventListener('DOMContentLoaded', function () {
    const cardContainer = document.querySelector('#current-package-btn-pages-container > div');
    const cards = cardContainer.querySelectorAll('.cards');
    const links = document.querySelectorAll('#current-package-details-btns a');

    links.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent the default anchor click behavior

            // Remove "active" class from all links
            links.forEach(link => link.classList.remove('active'));

            // Add "active" class to the clicked link
            this.classList.add('active');

            // Remove "active" class from all cards
            cards.forEach(card => card.classList.remove('active'));

            // Get the target element based on the href attribute
            const targetId = this.getAttribute('href').substring(1); // Get the ID without the '#'
            const targetElement = document.getElementById(targetId);

            // Add "active" class to the target element
            setTimeout(() => {
                targetElement.classList.add('active');
            }, 800);

            // Scroll horizontally to the target element
            const offsetLeft = targetElement.offsetLeft;
            setTimeout(() => {

                cardContainer.scrollTo({
                    left: offsetLeft,
                    behavior: 'smooth'
                });
            }, 200);

        });
    });

    // Prevent manual horizontal scrolling
    cardContainer.addEventListener('wheel', function (event) {
        if (event.deltaX !== 0) { // Check if horizontal scroll is attempted
            event.preventDefault();
            event.stopPropagation();
        }
    }, { passive: false });

    cardContainer.addEventListener('touchmove', function (event) {
        // Detect horizontal swipe attempt
        const touch = event.touches[0];
        if (touch) {
            const deltaX = touch.clientX - touch.startX;
            if (Math.abs(deltaX) > 0) {
                event.preventDefault();
                event.stopPropagation();
            }
        }
    }, { passive: false });
});