var inputs = document.querySelectorAll('#book-this-tour-form-container form div input');
document.addEventListener('DOMContentLoaded', function () {

    inputs.forEach(function (input) {
        input.addEventListener('blur', function () {
            if (!input.validity.valid) {
                input.nextElementSibling.classList.add('error'); // Add error class to the next <i>
            } else {
                input.nextElementSibling.classList.remove('error'); // Remove error class if valid
            }
        });
    });
    inputs.forEach(function (input) {
        input.addEventListener('blur', function () {

            var errorTargetId = input.getAttribute('data-error-target');
            var errorIndicator = document.getElementById(errorTargetId);

            if (!input.validity.valid) {
                errorIndicator.classList.add('error'); // Add error class to the specified <i>
            } else {
                errorIndicator.classList.remove('error'); // Remove error class if valid
            }
        })

    });


});




let tourSubmitBtn = document.getElementById('tour-submit-btn');
let tourTitle = document.getElementById('tourName');
let tourName = document.getElementById('tour-name');
let tourEmail = document.getElementById('tour-email');
let tourNumber = document.getElementById('tour-number');
let tourAdult = document.getElementById('tour-adult');
let tourChild = document.getElementById('tour-child');
let tourDate = document.getElementById('tour-date');


tourSubmitBtn.addEventListener('click', (e) => {
    e.preventDefault();

    let img = document.createElement('img');

    // Function to simulate a delayed response

    tourSubmitBtn.classList.remove('formNotSubmitted');
    // tourSubmitBtn.classList.remove('submitForm');
    img.src = 'https://i.pinimg.com/originals/ea/b7/e1/eab7e1120c9dd628d3bb39a20a94927d.gif';
    img.width = 60;
    tourSubmitBtn.innerText = '';
    tourSubmitBtn.appendChild(img);

    tourSubmitBtn.classList.add('submittingForm');

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
                    tourTitle: tourTitle.value,
                    name: tourName.value,
                    email: tourEmail.value,
                    number: tourNumber.value,
                    date: tourDate.value,
                    adult: tourAdult.value,
                    child: tourChild.value,
                })
            };

            // Make the actual API call
            return fetch("/api/tour-form-submit", options);
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
            tourSubmitBtn.classList.remove('submittingForm');
            tourSubmitBtn.classList.add('submitFormSuccessfully');
            img.src = 'https://media.tenor.com/WsmiS-hUZkEAAAAj/verify.gif';
            tourName.value = '';
            tourEmail.value = '';
            tourNumber.value = '';
            tourDate.value = '';
            tourAdult.value = '';
            tourChild.value = '';
            displayErrors('', 'tour');
            // for (let i = 0; i < ourServiceSpan.length; i++) {
            //     ourServiceSpan[i].removeAttribute('style');
            // }
            // for (let j = 0; j < ourServiceSVG.length; j++) {
            //     ourServiceSVG[j].removeAttribute('style');
            // }
            // tourName.removeAttribute('style');
            // tourEmail.removeAttribute('style');
            // tourNumber.removeAttribute('style');
            // tourAdult.removeAttribute('style');
            // tourChild.removeAttribute('style');
            setTimeout(() => {
                tourSubmitBtn.classList.remove('submitFormSuccessfully');
                // tourSubmitBtn.classList.add('submitForm');
                tourSubmitBtn.innerText = 'Book Now';

            }, 6000);
            // Display success message to the user
            // alert('Form submitted successfully!');
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
            // Display error message to the user
            let errorMessages = JSON.parse(error.message);
            displayErrors(errorMessages, 'tour');
            tourSubmitBtn.innerText = 'Book Now';
            // for (let i = 0; i < ourServiceSpan.length; i++) {
            //     ourServiceSpan[i].style.color = 'red'
            // }
            // for (let j = 0; j < ourServiceSVG.length; j++) {
            //     ourServiceSVG[j].style.fill = 'red'
            // }
            // inputs.forEach(function (input) {
            //     input.nextElementSibling.classList.add('error'); // Add error class to the next <i>

            // });

            tourSubmitBtn.classList.remove('submittingForm');
            tourSubmitBtn.classList.add('formNotSubmitted');
        });
});

