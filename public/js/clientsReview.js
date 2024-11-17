const reviewSection = document.querySelector(".review-wrapper");
const reviewCarousel = document.querySelector(".review-cards-inner-container");
const firstReviewCardWidth = reviewCarousel.querySelector(".review-card-container").offsetWidth;
const reviewCarouselChildren = [...reviewCarousel.children];
let reviewAutoPlay = true, autoPlayTimeoutId;
let reviewSectionVisible = false; // Track section visibility
let startAutoPlay;
// Function to initialize the review carousel
const initializeReviewCarousel = () => {
    if (reviewCarousel.classList.contains("initialized")) return; // Prevent reinitialization

    // Get the number of cards that can fit in the carousel at once
    let cardsPerView = Math.round(reviewCarousel.offsetWidth / firstReviewCardWidth);

    // Insert copies of the last few cards to beginning of carousel for infinite scrolling
    reviewCarouselChildren.slice(-cardsPerView).reverse().forEach(card => {
        reviewCarousel.insertAdjacentHTML("afterbegin", card.outerHTML);
    });

    // Insert copies of the first few cards to end of carousel for infinite scrolling
    reviewCarouselChildren.slice(0, cardsPerView).forEach(card => {
        reviewCarousel.insertAdjacentHTML("beforeend", card.outerHTML);
    });

    // Scroll the carousel at appropriate position to hide first few duplicate cards on Firefox
    reviewCarousel.classList.add("no-transition");
    reviewCarousel.scrollLeft = reviewCarousel.offsetWidth;
    reviewCarousel.classList.remove("no-transition");

    // Add event listeners for the arrow buttons to scroll the carousel left and right
    arrowBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            reviewCarousel.scrollLeft += btn.id === "left" ? -firstReviewCardWidth : firstReviewCardWidth;
        });
    });

    const handleInfiniteScroll = () => {
        // If the carousel is at the beginning, scroll to the end
        if (reviewCarousel.scrollLeft === 0) {
            reviewCarousel.classList.add("no-transition");
            reviewCarousel.scrollLeft = reviewCarousel.scrollWidth - (2 * reviewCarousel.offsetWidth);
            reviewCarousel.classList.remove("no-transition");
        }
        // If the carousel is at the end, scroll to the beginning
        else if (Math.ceil(reviewCarousel.scrollLeft) === reviewCarousel.scrollWidth - reviewCarousel.offsetWidth) {
            reviewCarousel.classList.add("no-transition");
            reviewCarousel.scrollLeft = reviewCarousel.offsetWidth;
            reviewCarousel.classList.remove("no-transition");
        }

        // Clear existing timeout & start autoplay if the section is visible
        clearTimeout(autoPlayTimeoutId);
        if (reviewSectionVisible) startAutoPlay();
    }

 startAutoPlay = () => {
        if (window.innerWidth < 280 || !reviewAutoPlay) return; // Return if window is smaller than 800 or reviewAutoPlay is false
        // Autoplay the carousel after every 2500 ms
        autoPlayTimeoutId = setTimeout(() => reviewCarousel.scrollLeft += firstReviewCardWidth, 2500);
    }
    startAutoPlay();

    reviewCarousel.addEventListener("scroll", handleInfiniteScroll);
    reviewSection.addEventListener("mouseenter", () => clearTimeout(autoPlayTimeoutId));
    reviewSection.addEventListener("mouseleave", startAutoPlay);

    reviewCarousel.classList.add("initialized"); // Mark as initialized
}

// Set up Intersection Observer
const reviewObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            if (!reviewSectionVisible) {
                console.log("The review-section is now visible.");
                reviewSectionVisible = true;
                initializeReviewCarousel(); // Initialize carousel when the section is visible
            }
            // Resume autoplay if the section is visible
            clearTimeout(autoPlayTimeoutId);
            startAutoPlay();
        } else {
            if (reviewSectionVisible) {
                console.log("The review-section is no longer visible.");
                reviewSectionVisible = false;
                clearTimeout(autoPlayTimeoutId); // Stop autoplay when the section is not visible
            }
        }
    });
}, {
    threshold: 0.1 // Adjust the threshold as needed
});

// Start observing the review-section
reviewObserver.observe(reviewSection);
