var inputs = document.querySelectorAll('#our-service-booking-form-container form div input');
document.addEventListener('DOMContentLoaded', function () {

    inputs.forEach(function (input) {
        console.log( input);
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





let ourServiceSubmitBtn = document.getElementById('ourServiceSubmitBtn');
let serviceTitle = document.getElementById('service-title');
let ourServiceName = document.getElementById('ourServiceName');
let ourServiceEmail = document.getElementById('ourServiceEmail');
let ourServiceNumber = document.getElementById('ourServiceNumber');
let ourServiceDate = document.getElementById('ourServiceDate');
let ourServiceCity = document.getElementById('ourServiceCity');
let ourServiceSVG = document.querySelectorAll('.input-container svg');
let ourServiceSpan = document.querySelectorAll('.input-container span');
let ourServiceI = document.querySelectorAll('.input-container i');

ourServiceSubmitBtn.addEventListener('click', (e) => {
    e.preventDefault();

    let img = document.createElement('img');

    // Function to simulate a delayed response

    ourServiceSubmitBtn.classList.remove('formNotSubmitted');
    // ourServiceSubmitBtn.classList.remove('submitForm');
    img.src = 'https://i.pinimg.com/originals/ea/b7/e1/eab7e1120c9dd628d3bb39a20a94927d.gif';
    ourServiceSubmitBtn.innerText = '';
    ourServiceSubmitBtn.appendChild(img);

    ourServiceSubmitBtn.classList.add('submittingForm');

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
                    serviceTitle: serviceTitle.value,
                    name: ourServiceName.value,
                    email: ourServiceEmail.value,
                    number: ourServiceNumber.value,
                    date: ourServiceDate.value,
                    city: ourServiceCity.value,
                })
            };

            // Make the actual API call
            console.log( options);
            return fetch("/api/our-service-form-submit", options);
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
            ourServiceSubmitBtn.classList.remove('submittingForm');
            ourServiceSubmitBtn.classList.add('submitFormSuccessfully');
            img.src = 'https://media.tenor.com/WsmiS-hUZkEAAAAj/verify.gif';
            ourServiceName.value = '';
            ourServiceEmail.value = '';
            ourServiceNumber.value = '';
            ourServiceDate.value = '';
            ourServiceCity.value = '';
            displayErrors('', 'our-service');
            for (let i = 0; i < ourServiceSpan.length; i++) {
                ourServiceSpan[i].removeAttribute('style');
            }
            for (let j = 0; j < ourServiceSVG.length; j++) {
                ourServiceSVG[j].removeAttribute('style');
            }
            ourServiceName.removeAttribute('style');
            ourServiceEmail.removeAttribute('style');
            ourServiceNumber.removeAttribute('style');
            ourServiceCity.removeAttribute('style');
            setTimeout(() => {
                ourServiceSubmitBtn.classList.remove('submitFormSuccessfully');
                // ourServiceSubmitBtn.classList.add('submitForm');
                ourServiceSubmitBtn.innerText = 'Book Now';

            }, 6000);
            // Display success message to the user
            // alert('Form submitted successfully!');
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
            // Display error message to the user
            let errorMessages = JSON.parse(error.message);
            displayErrors(errorMessages, 'our-service');
            ourServiceSubmitBtn.innerText = 'Book Now';
            // for (let i = 0; i < ourServiceSpan.length; i++) {
            //     ourServiceSpan[i].style.color = 'red'
            // }
            // for (let j = 0; j < ourServiceSVG.length; j++) {
            //     ourServiceSVG[j].style.fill = 'red'
            // }
            // inputs.forEach(function (input) {
            //     input.nextElementSibling.classList.add('error'); // Add error class to the next <i>

            // });

            ourServiceSubmitBtn.classList.remove('submittingForm');
            ourServiceSubmitBtn.classList.add('formNotSubmitted');
        });
});

let checkbox1 = document.getElementById('checkbox1');
checkbox1.addEventListener('click', () => {
    if (checkbox1.checked) {
        ourServiceSubmitBtn.disabled = false;
        ourServiceSubmitBtn.style.pointerEvents = 'auto';
        ourServiceSubmitBtn.style.opacity = 1;

    } else {
        ourServiceSubmitBtn.disabled = true;
        ourServiceSubmitBtn.style.pointerEvents = 'none';
        ourServiceSubmitBtn.style.opacity = 0.2;
    }
})
