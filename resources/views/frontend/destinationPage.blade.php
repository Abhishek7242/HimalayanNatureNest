@extends('frontend/layouts/main')
@section('main-section')
{{-- @include('frontend/landingPage/intro') --}}
<script>
let bookingNavColor = "linear-gradient(to left, #3f2b96, #a8c0ff)"; // PHP variable

</script>
<style>

@media only screen and (min-width: 820px) and (max-width: 1120px) {
#book-this-tour-form-container,#offer-package-section,#package-tags-section {
   
    width: 700px!important;
 margin-top: 0;
}
#book-this-tour-form-container {
    padding: 20px 50px;

}
    }
    @media only screen and (max-width: 820px) {
   .breadcrumbs-heading h2 {
         font-size: clamp(26px, 7.5vw, 60px)!important;}

}

</style>
<section id="destination-tour-package-section">

    <x-breadcrumbs name="{{$destination}} Tour Packages" imgUrl={{$breadcrumbImageUrl}} :breadcrumbs="$breadcrumbs" />
   <div id="package-section-inner-container">

       <div id="tour-packages-container">
           
      @foreach($AllTourDetails as $TourDetails)
   <x-tour-package src="{{url('/destination/' . $destination)}}" image='{{$TourDetails->tourPackageImage}}' route='{{$TourDetails->tourPackageRoute}}' endPoint='{{$TourDetails->tourPackageEndPoint}}' startPoint='{{$TourDetails->tourPackageStartPoint}}' title='{{$TourDetails->tourPackageTitle}}' dayNight="{{$TourDetails->tourPackageDuration}}" />
@endforeach
        </div>
        <div id="side-section">
<x-book-this-tour-form tourName="{{$destination}} Tour Packages" />
<div id="offer-package-section">
<h2>Offer Packages</h2>
 @foreach($AllofferPackages as $offerPackage)
    <x-offer-packages 
        offerTitle='{{$offerPackage->title}}' 
        offerDayNight='{{$offerPackage->duration}}' 
        offerImage='{{$offerPackage->images}}' 
        tourTitle='{{$offerPackage->tour_name}}' 
    />
@endforeach
</div>
<div id="package-tags-section">
<h2>Package Tags</h2>
<div>
@foreach($AllTourDetails as $TourDetails)
    <x-packages-tags tagName='{{$TourDetails->packageTags}}' />
@endforeach
</div>
</div>

        </div>
    </div>
</section>

@endsection