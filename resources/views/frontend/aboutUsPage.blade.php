@extends('frontend/layouts/main')
@section('main-section')
<script>
let bookingNavColor = "linear-gradient(45deg, rgb(13, 0, 255), rgb(142, 232, 255))"; // PHP variable

</script>
    <section id="about-us-section">

        <x-breadcrumbs name="About Us" imgUrl='https://images.pexels.com/photos/206359/pexels-photo-206359.jpeg?cs=srgb&dl=pexels-pixabay-206359.jpg&fm=jpg' :breadcrumbs="$breadcrumbs" />
        <div id="about-us-container">
            <div id="about-us-inner-container">
                <div id="about-us-info">
                  
                    <div id="about-us-form-container">

                        <div id="about-us-logo">
                            {{-- <div>
                                <h2>About Us</h2>
                            </div> --}}
                            <img
                                src="/assets/photo-collage.png.png"
                                alt="">
                        </div>
                      <div>
                          <div id="about-us-heading">
                        <h2>KNOW MORE ABOUT US</h2>
                        <p>About Our Company</p>
                    </div>
                    <p id="about-desc">We are the leading travel agents of Himachal. Over the years, we have grown to be the largest Travel Management Company in India, with each of its product and service benchmarking the mark of quality. Our Philosophy is to focus on offering a comprehensive and extensive range of services which deliver strategic value, innovative technology and true Travel consulting.</p>

                    @include('frontend/aboutUs/experienceSection')
                </div>
            </div>
            @include('frontend/aboutUs/ourMission')



                   
                </div>
            </div>
        </div>
    </section>
@endsection