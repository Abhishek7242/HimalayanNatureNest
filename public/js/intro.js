let clickInterval;

function buttonClicked() {
    console.log('Button was clicked!');
    // Clear the existing interval
    clearInterval(clickInterval);
    // Start a new interval
    startAutoClick();
    // Add any additional functionality you need when the button is clicked
}

function startAutoClick() {
    clickInterval = setInterval(function () {
        document.getElementById('next-button').click();
    }, 7000);
}

window.onload = function () {
    // Start the auto-click interval when the page loads
    startAutoClick();
}