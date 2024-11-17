const wrapper = document.querySelector(".wrapper");
const carousel = document.querySelector(".cards-inner-container");
const firstCardWidth = carousel.querySelector(".card").offsetWidth;
const arrowBtns = document.querySelectorAll(".wrapper i");
const carouselChildrens = [...carousel.children];
const popularAdventuresSection = document.getElementById("top-adventures-section");
let autoPlay;
let isAutoPlay = true, timeoutId;
let isSectionVisible = false; // Track section visibility

// Function to initialize the carousel
const initializeCarousel = () => {
    if (carousel.classList.contains("initialized")) return; // Prevent reinitialization

    // Get the number of cards that can fit in the carousel at once
    let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

    // Insert copies of the last few cards to beginning of carousel for infinite scrolling
    carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
        carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
    });

    // Insert copies of the first few cards to end of carousel for infinite scrolling
    carouselChildrens.slice(0, cardPerView).forEach(card => {
        carousel.insertAdjacentHTML("beforeend", card.outerHTML);
    });

    // Scroll the carousel at appropriate position to hide first few duplicate cards on Firefox
    carousel.classList.add("no-transition");
    carousel.scrollLeft = carousel.offsetWidth;
    carousel.classList.remove("no-transition");

    // Add event listeners for the arrow buttons to scroll the carousel left and right
    arrowBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
        });
    });

    const infiniteScroll = () => {
        // If the carousel is at the beginning, scroll to the end
        if (carousel.scrollLeft === 0) {
            carousel.classList.add("no-transition");
            carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
            carousel.classList.remove("no-transition");
        }
        // If the carousel is at the end, scroll to the beginning
        else if (Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
            carousel.classList.add("no-transition");
            carousel.scrollLeft = carousel.offsetWidth;
            carousel.classList.remove("no-transition");
        }

        // Clear existing timeout & start autoplay if the section is visible
        clearTimeout(timeoutId);
        if (isSectionVisible) autoPlay();
    }

    autoPlay = () => {
        if (window.innerWidth < 280 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
        // Autoplay the carousel after every 2500 ms
        timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
    }
    autoPlay();

    carousel.addEventListener("scroll", infiniteScroll);
    wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
    wrapper.addEventListener("mouseleave", autoPlay);

    carousel.classList.add("initialized"); // Mark as initialized
}

// Set up Intersection Observer
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            if (!isSectionVisible) {
                console.log("The popular-adventures-section is now visible.");
                isSectionVisible = true;
                initializeCarousel(); // Initialize carousel when the section is visible
            }
            // Resume autoplay if the section is visible
            clearTimeout(timeoutId);
            autoPlay();
        } else {
            if (isSectionVisible) {
                console.log("The popular-adventures-section is no longer visible.");
                isSectionVisible = false;
                clearTimeout(timeoutId); // Stop autoplay when the section is not visible
            }
        }
    });
}, {
    threshold: 0.1 // Adjust the threshold as needed
});

// Start observing the popular-adventures-section
observer.observe(popularAdventuresSection);
