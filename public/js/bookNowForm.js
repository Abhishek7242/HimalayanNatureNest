
let bookNowFormSubmitBtn = document.getElementById('book-now-submit-btn');
let bookNowFormName = document.getElementById('bookNowFormName');
let bookNowFormEmail = document.getElementById('bookNowFormEmail');
let bookNowFormNumber = document.getElementById('bookNowFormNumber');
let bookNowFormDestination = document.getElementById('bookNowFormDestination');
let bookNowSVG = document.querySelectorAll('.input-container svg');
let bookNowSpan = document.querySelectorAll('.input-container span');
console.log( bookNowSpan.length);
bookNowFormSubmitBtn.addEventListener('click', (e) => {
    e.preventDefault();

    let img = document.createElement('img');

    // Function to simulate a delayed response

    bookNowFormSubmitBtn.classList.remove('formNotSubmitted');
    // bookNowFormSubmitBtn.classList.remove('submitForm');
    img.src = 'https://i.pinimg.com/originals/ea/b7/e1/eab7e1120c9dd628d3bb39a20a94927d.gif';
    bookNowFormSubmitBtn.innerText = '';
    bookNowFormSubmitBtn.appendChild(img);

    bookNowFormSubmitBtn.classList.add('submittingForm');

    // Display loading state or message
    console.log('Submitting form...');

    // Simulate delayed response before making actual fetch call
    simulateDelayedResponse()
        .then(simulatedResponse => {
            console.log('Simulated Response:', simulatedResponse);

            // Construct options for actual fetch call
            const options = {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    name: bookNowFormName.value,
                    email: bookNowFormEmail.value,
                    number: bookNowFormNumber.value,
                    destination: bookNowFormDestination.value,
                })
            };

            // Make the actual API call
            return fetch(url, options);
        })
        .then(response => {
            if (!response.ok) {
                return response.json().then(errorData => {
                    throw new Error(JSON.stringify(errorData.errors));
                });
            }
            return response.json();
        })
        .then(data => {
            console.log(data);
            bookNowFormSubmitBtn.classList.remove('submittingForm');
            bookNowFormSubmitBtn.classList.add('submitFormSuccessfully');
            img.src = 'https://media.tenor.com/WsmiS-hUZkEAAAAj/verify.gif';
            bookNowFormName.value = '';
            bookNowFormEmail.value = '';
            bookNowFormNumber.value = '';
            bookNowFormDestination.value = '';
            displayErrors('', 'book-now');
            // for (let i = 0; i < bookNowSpan.length; i++) {
            //     bookNowSpan[i].removeAttribute('style');
            // }
            // for (let j = 0; j < bookNowSVG.length; j++) {
            //     bookNowSVG[j].removeAttribute('style');
            // }
            // bookNowFormName.removeAttribute('style');
            // bookNowFormEmail.removeAttribute('style');
            // bookNowFormNumber.removeAttribute('style');
            // bookNowFormDestination.removeAttribute('style');
            setTimeout(() => {
                bookNowFormSubmitBtn.classList.remove('submitFormSuccessfully');
                // bookNowFormSubmitBtn.classList.add('submitForm');
            bookNowFormSubmitBtn.innerText = 'BOOK NOW';

            }, 6000);
            // Display success message to the user
            // alert('Form submitted successfully!');
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
            // Display error message to the user
            let errorMessages = JSON.parse(error.message);
            displayErrors(errorMessages, 'book-now');
            bookNowFormSubmitBtn.innerText = 'BOOK NOW';
// for (let i = 0; i < bookNowSpan.length; i++) {
//     bookNowSpan[i].style.color = 'red'
// }
// for (let j = 0; j < bookNowSVG.length; j++) {
//     bookNowSVG[j].style.fill = 'red'
// }
// bookNowFormName.style.borderColor = 'red';
// bookNowFormEmail.style.borderColor = 'red';
// bookNowFormNumber.style.borderColor = 'red';
// bookNowFormDestination.style.borderColor = 'red';
            bookNowFormSubmitBtn.classList.remove('submittingForm');
            bookNowFormSubmitBtn.classList.add('formNotSubmitted');
        });
});