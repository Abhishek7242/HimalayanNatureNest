<div id="contact-form-section">
    <div id="contact-form-outer-container">

        <div id="contact-form-container">
            <h2>Get In Touch With Us!</h2>

            <form >
                 
                <div>
                    <input required autocomplete="name" type="text" id="contactName" name="name" data-error-target="name">
                    <i class="i "></i>
                    <span id="name">Name</span>
                    <i class="svg-box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z" />
                        </svg></i>
                    <div id="contactnameError" class="contact-error-message error-message"></div>

                </div>
                <div>
                    <input required autocomplete="email" id="contactEmail" type="email" name="email" data-error-target="email">
                    <i class="i "></i>
                    <span id="email">Email</span>
                    <i class="svg-box"><svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path
                                d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                        </svg></i>
                    <div id="contactemailError" class="contact-error-message error-message"></div>

                </div>
                <div>
                       <select id="countryCode" name="countryCode" class="position-absolute" required>
        <option value="91" selected>+91</option>
        <option value="1">+1</option>
        <option value="44">+44</option>
        <option value="61">+61</option>
        <option value="81">+81</option>
        <!-- Add more country codes as needed -->
    </select>
                    <input required autocomplete="phone" id="contactNumber" type="phone" name="phone" data-error-target="phone">
                    <i class="i "></i>
                    <span id="phone">Contact No.</span>
                    <i class="svg-box"><svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path
                                d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                        </svg></i>
                    <div id="contactnumberError" class="contact-error-message error-message"></div>

                </div>

                <div id="textarea-container">
                    <textarea required data-error-target="message" id="contactMessage" placeholder="Message"></textarea>
                    {{-- <i class="i textarea-border"></i> --}}
                    {{-- <span id="message">Message</span> --}}
                    <i class="svg-box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M64 0C28.7 0 0 28.7 0 64L0 352c0 35.3 28.7 64 64 64l96 0 0 80c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416 448 416c35.3 0 64-28.7 64-64l0-288c0-35.3-28.7-64-64-64L64 0z"/></svg></i>

                </div>
                <div id="term-conditions">
                    <a href="#">terms and conditions</a>
                </div>
                <div id="checkbox-container">
                    <div>

                        <input style="transition: 4s" type="checkbox" id="contact-checkbox" checked required>
                        <label for="contact-checkbox">I agree to the above terms and conditions</label>
                    </div>
                    <button id="contactSubmitBtn">Submit</button>
                </div>
            </form>
        </div>
        <div id="contact-form-image-container">
            <div id="contact-us-logo">
                <div>
                    <h2>Contact Us</h2>
                </div>

                <img src="https://static.wixstatic.com/media/fa1267_8d5e4df280eb42f496d1c6544a8eee8b~mv2.gif"
                    alt="">
            </div>
        </div>
    </div>
</div>
<script>
 

</script>
 <script src="{{ url('js/contactUsForm.js') }}"></script> 
<script src="{{ secure_url('js/contactUsForm.js') }}"></script> 
