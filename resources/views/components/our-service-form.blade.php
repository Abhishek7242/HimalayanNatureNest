<div id="our-service-booking-form-container">
<div id="booking-form-outer-container">

    <div id="booking-form-container" >
        <h2 >Book Your {{$serviceName}} Now</h2>
        <form >
            <input type="text" id="service-title" value="{{$name}}" hidden>
            <div class="input-container">
                <input required autocomplete="name" id="ourServiceName" type="text" name="name" data-error-target="name">
                <i class="i "></i>
                <span id="name" >Name</span>
                <i class="svg-box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z"/></svg></i>
                    <div id="our-servicenameError" class="our-service-error-message error-message"></div>

            </div>
            <div class="input-container">
                <input required autocomplete="email" id="ourServiceEmail" type="email" name="email" data-error-target="email">
                <i class="i "></i>
                <span id="email" >Email</span>
                <i class="svg-box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg></i>
                    <div id="our-serviceemailError" class="our-service-error-message error-message"></div>
            
            </div>
            <div class="input-container">
                <input required autocomplete="phone" id="ourServiceNumber" type="number" name="phone" data-error-target="phone">
                <i class="i "></i>
                <span id="phone" >Conatct No.</span>
                <i class="svg-box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg></i>
                    <div id="our-servicenumberError" class="our-service-error-message error-message"></div>
           
            </div>
            <div class="input-container">
               <input required autocomplete="date" id="ourServiceDate" onfocus="this.showPicker()" class="hidden-date" type="date" name="date" data-error-target="date">
                        <i class="i"></i>
                        <span id="date">Select Date</span>
                <i class="svg-box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M128 0c17.7 0 32 14.3 32 32l0 32 128 0 0-32c0-17.7 14.3-32 32-32s32 14.3 32 32l0 32 48 0c26.5 0 48 21.5 48 48l0 48L0 160l0-48C0 85.5 21.5 64 48 64l48 0 0-32c0-17.7 14.3-32 32-32zM0 192l448 0 0 272c0 26.5-21.5 48-48 48L48 512c-26.5 0-48-21.5-48-48L0 192zm64 80l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm128 0l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM64 400l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zm112 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16z"/></svg></i>
                    <div id="our-servicedateError" class="our-service-error-message error-message"></div>
           
            </div>
            <div class="input-container">
                <input required autocomplete="city" id="ourServiceCity" type="text" name="city" data-error-target="city">
                <i class="i "></i>
                <span id="city" >City</span>
                <i class="svg-box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg></i>
                    <div id="our-servicecityError" class="our-service-error-message error-message"></div>
           
            </div>
            {{-- <div>
                <textarea required autocomplete="phone" type="email" name="phone" data-error-target="phone"></textarea>
                <i class="i "></i>
                <span id="phone" >City</span>
                <i class="svg-box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg></i>
           
            </div> --}}
       <div id="term-conditions">
        <a href="#">terms and conditions</a>
       </div>
     <div id="checkbox-container">
        <div>

            <input type="checkbox" id="checkbox1" checked required>
            <label for="checkbox1">I agree to the above terms and conditions</label>
        </div>
        <button id="ourServiceSubmitBtn" type="submit">Book Now</button>
    </div>
        </form>
    </div>
    <div id="booking-form-image-container">
        <img src="{{$formImage}}" alt="">
    </div>
</div>
</div>

<script src="{{ url('js/ourServiceBookingForm.js') }}"></script>

