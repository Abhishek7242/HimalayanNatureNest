<div id="book-this-tour-form-container">
<h2>Book This Tour</h2>
<form action="">
    <input type="text" id="tourName" value="{{$tourName}}" hidden>
      <div>
                        <input required autocomplete="name" type="text" id="tour-name" name="name" data-error-target="name">
                        <i class="i"></i>
                        <span id="name">Your Name</span>
                    <div id="tournameError" class="tour-error-message error-message"></div>

                    </div>
      <div>
                        <input required autocomplete="email" id="tour-email" type="email" name="email" data-error-target="email">
                        <i class="i"></i>
                        <span id="email">Your Email</span>
                    <div id="touremailError" class="tour-error-message error-message"></div>

                    </div>
      <div>
                        <input required autocomplete="phone" type="text"  id="tour-number" name="phone" data-error-target="phone">
                        <i class="i"></i>
                        <span id="phone">Phone No.</span>
                    <div id="tournumberError" class="tour-error-message error-message"></div>

                    </div>
    <div id="persons-count">
         <div>
                        {{-- <input required autocomplete="name" type="text" name="name" data-error-target="name"> --}}
                        <select name="" id="tour-adult" required>
                            <option value="" disabled selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <i class="i"></i>
                        <span id="adult">Adult</span>
                    <div id="touradultError" class="tour-error-message error-message"></div>

                    </div>
         <div>
                 <select name="" id="tour-child" required>
                            <option value="" disabled selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        {{-- <input required autocomplete="name" type="text" name="name" data-error-target="name"> --}}
                        <i class="i"></i>
                        <span id="child">Child</span>
                    <div id="tourchildError" class="tour-error-message error-message"></div>

                    </div>
    </div>
    <div>
                        <input required autocomplete="date" id="tour-date" onfocus="this.showPicker()" class="hidden-date" type="date" name="date" data-error-target="date">
                        <i class="i"></i>
                        <span id="date">Select Date</span>
                    <div id="tourdateError" class="tour-error-message error-message"></div>

                    </div>
    <div>
        <button id="tour-submit-btn">Book Now</button>
    </div>
</form>


</div>
<script src="{{ url('js/bookThisTour.js') }}"></script>
<script src="{{ secure_url('js/bookThisTour.js') }}"></script>
