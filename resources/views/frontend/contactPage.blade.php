@extends('frontend/layouts/main')
@section('main-section')
<script>
let bookingNavColor = "linear-gradient(45deg, rgb(13, 0, 255), rgb(142, 232, 255))"; // PHP variable

</script>
    <section id="contact-us-section">

        <x-breadcrumbs name="Contact Us" imgUrl='https://images.websitebuilderexpert.com/wp-content/uploads/2023/02/13045442/Contact-Us-Page-Examples.jpg' :breadcrumbs="$breadcrumbs" />
        <div id="contact-us-container">
            <div id="contact-us-inner-container">
                <div id="contact-us-info">
                    <div id="contact-us-heading">
                        <h2>Contact us</h2>
                        <p>Get In Touch With Us!</p>
                    </div>
                    <div>

                        <x-contact-form />
                    </div>
                    {{-- <div id="contact-us-form-container">

                        <div id="contact-us-logo">
                            <div>
                                <h2>Contact Us</h2>
                            </div>
                            <img width="400px"
                                src="https://static.wixstatic.com/media/fa1267_8d5e4df280eb42f496d1c6544a8eee8b~mv2.gif"
                                alt="">
                        </div>
                        <div id="contact-us-form">
                            <div>

                                <form action="">
                                    <div>
                                        <input required type="text">
                                        <span>Name</span>
                                    </div>
                                    <div>
                                        <input required type="text">
                                        <span>Email</span>

                                    </div>
                                    <div id="pnone-no">
                                        <input required type="text">
                                        <span>Phone No.</span>

                                    </div>
                                    <div>
                                        <textarea placeholder="Message" rows="5"></textarea>
                                    </div>
                                    <div>
                                        <button>
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                    <div id="contact-us-details-button">
                        <div id="contact-us-address-detail">
                            <h3>Address</h3>

                            <p><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path
                                            d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                                    </svg></span>Address here 11</p>
                        </div>
                        <div id="contact-us-contact-details">
                            <h3>Contact us</h3>
                            <div>

                                <a  href="tel:+919111119191"> <span><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path
                                                d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                                        </svg></span>+91-9111119191</a>
                            </div>
                            <div>

                                <a href="mailto:info@himalayannaturenest.com"><span><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path
                                                d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                                        </svg></span>info.himalayannaturenest.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
