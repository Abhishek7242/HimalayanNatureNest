<section id="book-now-form-section">
    <div id="book-now-form-container">
        <div id="book-now-form-inner-container">
            <form id="book-now-form">
                @csrf
                <div class="input-container">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512">
                        <path
                            d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z" />
                    </svg>
                    <input required name="name" id="bookNowFormName" type="text">
                    <span>Name</span>
                    <div id="book-nownameError" class="book-now-error-message error-message"></div>
                </div>
                <div class="input-container">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512">
                        <path
                            d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                    </svg>
                    <input required name="email" id="bookNowFormEmail"type="email">
                    <span>Email</span>
                    <div id="book-nowemailError" class="book-now-error-message error-message"></div>

                </div>
                <div class="input-container">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512">
                        <path
                            d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                    </svg>
                    <input required name="number" id="bookNowFormNumber" type="text">
                    <span>Phone No.</span>
                    <div id="book-nownumberError" class="book-now-error-message error-message"></div>

                </div>
                <div class="input-container">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 384 512">
                        <path
                            d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                    <input required name="destination" id="bookNowFormDestination" type="text">
                    <span>Destination</span>
                    <div id="book-nowdestinationError" class="book-now-error-message error-message"></div>

                </div>
                <div id="book-now-submit-btn-container">

                    <button id="book-now-submit-btn">BOOK NOW</button>
                </div>
            </form>
        </div>
    </div>
</section>

<script src="{{ url('js/bookNowForm.js') }}"></script>
<script src="{{ secure_url('js/bookNowForm.js') }}"></script>
