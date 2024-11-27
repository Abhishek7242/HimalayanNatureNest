
let bookNowSectionSubmitBtn = document.getElementById('book-now-section-btn');
let bookNowSectionSVG = document.querySelector('#book-now-section-input-container svg');
let bookNowSectionSpan = document.querySelector('#book-now-section-input-container span');
let bookNowSectionNumber = document.getElementById('bookNowSectionNumber');

bookNowSectionSubmitBtn.addEventListener('click', (e) => {
    e.preventDefault();

    let img = document.createElement('img');

    // Function to simulate a delayed response


    bookNowSectionSubmitBtn.classList.remove('formNotSubmitted');
    // bookNowSectionSubmitBtn.classList.remove('submitForm');
    img.src = 'https://i.pinimg.com/originals/ea/b7/e1/eab7e1120c9dd628d3bb39a20a94927d.gif';
    bookNowSectionSubmitBtn.innerText = '';
    bookNowSectionSubmitBtn.appendChild(img);

    bookNowSectionSubmitBtn.classList.add('submittingForm');

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
                    name: 'Not Added This is from bookNowSection',
                    email: 'bookNowSection@gmail.com', 
                    number: bookNowSectionNumber.value,
                    destination: 'bookNowSection',
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
            bookNowSectionSubmitBtn.classList.remove('submittingForm');
            bookNowSectionSubmitBtn.classList.add('submitFormSuccessfully');
            img.src = 'https://media.tenor.com/WsmiS-hUZkEAAAAj/verify.gif';
     
            bookNowSectionNumber.value = '';
            bookNowSectionNumber.style.removeProperty('border-color');
            bookNowSectionSVG.style.removeProperty('fill');
            bookNowSectionSpan.style.removeProperty('color');

            displayErrors('', 'book-now-section');
            setTimeout(() => {
                bookNowSectionSubmitBtn.classList.remove('submitFormSuccessfully');
                // bookNowSectionSubmitBtn.classList.add('submitForm');
            bookNowSectionSubmitBtn.innerText = 'BOOK NOW';

            }, 6000);
            // Display success message to the user
            // alert('Form submitted successfully!');
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
            // Display error message to the user
            let errorMessages = JSON.parse(error.message);
            displayErrors(errorMessages, 'book-now-section');
            bookNowSectionSubmitBtn.innerText = 'BOOK NOW';
            bookNowSectionNumber.style.borderColor = 'red'
            bookNowSectionSpan.style.color = 'red'
            bookNowSectionSVG.style.fill='red'
            bookNowSectionSubmitBtn.classList.remove('submittingForm');
            bookNowSectionSubmitBtn.classList.add('formNotSubmitted');
        });
});
