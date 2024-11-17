<div id="our-service-main-container">
   <div id="our-service-inner-container">
    <div id="service-image-container">
        <a href="#booking-form"><p>Book Your {{$serviceName}} Now</p></a>
        <img src="{{ $serviceData['images'][1] }}" alt="">
    </div>
    <div id="service-desc-container">
<h3>Book Your {{$serviceName}} With Himalyan Nature Nest</h3>
<p>" Your journey to opulence begins at Himayan Host. Book your escape today! "</p>
<div>
<div class="services-on-booking">
    @foreach($serviceData['services'] as $service)
        <div class="service-item">
            <span>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">  {!! $service['svgIcon'] !!}</svg>
               <!-- Display the SVG icon -->
            </span>
            <span>
                {{ $service['details'] }} <!-- Display the service details -->
            </span>
        </div>
    @endforeach
</div>

</div>
    </div>

   </div>
   <div id="service-summary-container">
    <h3>{{$bookingName}} - Himalyan Nature Nest</h3>
    <p>Himalyan Host remains unwavering in our dedication to nurturing individuals to help them reach their full potential.</p>
   </div>

</div>