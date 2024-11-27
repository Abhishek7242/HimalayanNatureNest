
var inputs = document.querySelectorAll('#contact-form-container form div input');
document.addEventListener('DOMContentLoaded', function () {

    inputs.forEach(function (input) {
        input.addEventListener('blur', function () {
            console.log(input);
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











let contactSubmitBtn = document.getElementById('contactSubmitBtn');
let contactName = document.getElementById('contactName');
let contactEmail = document.getElementById('contactEmail');
let contactNumber = document.getElementById('contactNumber');
let contactMessage = document.getElementById('contactMessage');
let contactSVG = document.querySelectorAll('.input-container svg');
let contactSpan = document.querySelectorAll('.input-container span');
let contactI = document.querySelectorAll('.input-container i');
let countryCode = document.getElementById('countryCode')


contactSubmitBtn.addEventListener('click', (e) => {
    e.preventDefault();

    let img = document.createElement('img');

    // Function to simulate a delayed response

    contactSubmitBtn.classList.remove('formNotSubmitted');
    // contactSubmitBtn.classList.remove('submitForm');
    img.src = 'https://i.pinimg.com/originals/ea/b7/e1/eab7e1120c9dd628d3bb39a20a94927d.gif';
    contactSubmitBtn.innerText = '';
    contactSubmitBtn.appendChild(img);

    contactSubmitBtn.classList.add('submittingForm');

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
                    name: contactName.value,
                    email: contactEmail.value,
                    number: contactNumber.value,
                    countryCode: countryCode.value,
                    message: contactMessage.value,
                })
            };
console.log( options);
            // Make the actual API call
            return fetch("/api/contact-us", options);
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
            contactSubmitBtn.classList.remove('submittingForm');
            contactSubmitBtn.classList.add('submitFormSuccessfully');
            img.src = 'https://media.tenor.com/WsmiS-hUZkEAAAAj/verify.gif';
            contactName.value = '';
            contactEmail.value = '';
            countryCode.style.opacity = '0';

            contactNumber.value = '';
            contactMessage.value = '';
            displayErrors('', 'contact');
            for (let i = 0; i < contactSpan.length; i++) {
                contactSpan[i].removeAttribute('style');
            }
            for (let j = 0; j < contactSVG.length; j++) {
                contactSVG[j].removeAttribute('style');
            }
            contactName.removeAttribute('style');
            contactEmail.removeAttribute('style');
            contactNumber.removeAttribute('style');
            setTimeout(() => {
                contactSubmitBtn.classList.remove('submitFormSuccessfully');
                // contactSubmitBtn.classList.add('submitForm');
                contactSubmitBtn.innerText = 'Submit';

            }, 6000);
            // Display success message to the user
            // alert('Form submitted successfully!');
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
            // Display error message to the user
            let errorMessages = JSON.parse(error.message);
            displayErrors(errorMessages, 'contact');
            contactSubmitBtn.innerText = 'Submit';
            // for (let i = 0; i < contactSpan.length; i++) {
            //     contactSpan[i].style.color = 'red'
            // }
            // for (let j = 0; j < contactSVG.length; j++) {
            //     contactSVG[j].style.fill = 'red'
            // }
            // inputs.forEach(function (input) {
            //     input.nextElementSibling.classList.add('error'); // Add error class to the next <i>

            // });

            contactSubmitBtn.classList.remove('submittingForm');
            contactSubmitBtn.classList.add('formNotSubmitted');
        });
});
let contactCheckbox = document.getElementById('contact-checkbox');
contactCheckbox.addEventListener('click', () => {
    console.log('jjjjjjjjj')
    if (contactCheckbox.checked) {
        contactSubmitBtn.disabled = false;
        contactSubmitBtn.style.pointerEvents = 'auto';
        contactSubmitBtn.style.opacity = 1;

    } else {
        contactSubmitBtn.disabled = true;
        contactSubmitBtn.style.pointerEvents = 'none';
        contactSubmitBtn.style.opacity = 0.2;
    }
})

// Add focus event listener
contactNumber.addEventListener('focus', (event) => {
    countryCode.style.opacity = '1';
});
