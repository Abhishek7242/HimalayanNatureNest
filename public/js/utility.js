const url = '/api/submit';
function displayErrors(errors, errorClass) {
    // Clear previous error messages
    console.log('Errors received:', errors);
    document.querySelectorAll(`.${errorClass}-error-message`).forEach(errorSpan => {
        errorSpan.innerText = '';
    });

    // Loop through each error and display it near the corresponding input field
    for (let field in errors) {
        if (errors.hasOwnProperty(field)) {
            let errorSpan = document.getElementById(`${errorClass}` + field + 'Error');
            if (errorSpan) {
                errorSpan.innerText = errors[field].join(', '); // Join multiple errors with a comma
                errorSpan.style.color = 'red';
            }
        }
    }
}
function simulateDelayedResponse() {
    return new Promise((resolve) => {
        setTimeout(() => {
            resolve({
                success: true,
                message: 'Simulated data received after delay',
            });
        }, 0); // Simulate a delay
    });
}
