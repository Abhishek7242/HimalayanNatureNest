@extends('frontend/layouts/main')
@section('main-section')
{{-- @include('frontend/landingPage/intro') --}}

<script>
let bookingNavColor = "#7F00FF"; // PHP variable
</script>
<style>
   .breadcrumbs-heading h2 {
         font-size: clamp(16px, 4.3vw, 60px)!important;}

    @media only screen and (max-width: 820px) {
   .breadcrumbs-heading h2 {
         font-size: clamp(16px, 5.2vw, 60px)!important;}

}

</style>
<section id="destination-current-package-section">

    <x-breadcrumbs name="{{$packageReadable}}" imgUrl={{$breadcrumbImageUrl}} :breadcrumbs="$breadcrumbs" />
   <div id="current-package-inner-container">
       <div id="current-package-container">
<div id="current-package-details-container">
    <div id="current-package-image-container">
        <img src={{$breadcrumbImageUrl}} alt="">
    </div>
    <h2>{{$packageReadable}}</h2>
    <div id="current-package-details-btns">
<a href="#details" class="active"> Tour Itinerary</a>
<a href="#overview" class=""> Overview</a>
<a href="#inclusion" class=""> Inclusion</a>
<a href="#exclusion" class=""> Exclusion</a>
</div>
<div id="current-package-btn-pages-container">
    <div>
        <div id="details" class="cards active">

        
        <div class="accordion ">
            <x-package-accordian accordianCollapsed='nothing'  accordianShowClass='show' accordianSNo='01' accordianID='firstaccordian' accordianTitle='DAY 1 : Reach Shimla From Delhi' accordianDesc='Reach Delhi and meet our representative. Transfer from Delhi to Shimla, through the
            scenic ghat roads. Check-in the hotel in Shimla and rest for some time. The rest of the day is at leisure
            and you are free to roam and explore the popular landmarks and local markets around the hotel. Overnight
            stay in Shimla.' />
            <x-package-accordian accordianCollapsed='collapsed' accordianShowClass='nothing' accordianSNo='02' accordianID='secondaccordian'  accordianTitle='DAY 2 :  Sightseeing In Shimla And Excursion To Kufri' accordianDesc='Reach Delhi and meet our representative. Transfer from Delhi to Shimla, through the
            scenic ghat roads. Check-in the hotel in Shimla and rest for some time. The rest of the day is at leisure
            and you are free to roam and explore the popular landmarks and local markets around the hotel. Overnight
            stay in Shimla.' />
            <x-package-accordian accordianCollapsed='collapsed' accordianShowClass='nothing' accordianSNo='03' accordianID='thirdccordian'  accordianTitle='DAY 3 : Shimla To Manali Via Kullu Valley' accordianDesc='Reach Delhi and meet our representative. Transfer from Delhi to Shimla, through the
            scenic ghat roads. Check-in the hotel in Shimla and rest for some time. The rest of the day is at leisure
            and you are free to roam and explore the popular landmarks and local markets around the hotel. Overnight
            stay in Shimla.' />
            <x-package-accordian accordianCollapsed='collapsed' accordianShowClass='nothing' accordianSNo='04' accordianID='forthaccordian'  accordianTitle='DAY 4 : Excursion To Solang Valley And Sightseeing In Manali' accordianDesc='Reach Delhi and meet our representative. Transfer from Delhi to Shimla, through the
            scenic ghat roads. Check-in the hotel in Shimla and rest for some time. The rest of the day is at leisure
            and you are free to roam and explore the popular landmarks and local markets around the hotel. Overnight
            stay in Shimla.' />
            <x-package-accordian accordianCollapsed='collapsed' accordianShowClass='nothing' accordianSNo='05' accordianID='fifthaccordian'  accordianTitle='DAY 5 : Departure And Small Tour' accordianDesc='Reach Delhi and meet our representative. Transfer from Delhi to Shimla, through the
            scenic ghat roads. Check-in the hotel in Shimla and rest for some time. The rest of the day is at leisure
            and you are free to roam and explore the popular landmarks and local markets around the hotel. Overnight
            stay in Shimla.' />
            <x-package-accordian accordianCollapsed='collapsed' accordianShowClass='nothing' accordianSNo='06' accordianID='sixthaccordian'  accordianTitle='DAY 6 : Departure From Manali' accordianDesc='Reach Delhi and meet our representative. Transfer from Delhi to Shimla, through the
            scenic ghat roads. Check-in the hotel in Shimla and rest for some time. The rest of the day is at leisure
            and you are free to roam and explore the popular landmarks and local markets around the hotel. Overnight
            stay in Shimla.' />
        </div>
        </div>

        <div id="overview" class="cards">
     
        <div class="accordion ">
            <x-package-accordian accordianCollapsed='nothing'  accordianShowClass='show' accordianSNo='01' accordianID='firstaccordian' accordianTitle='{{$packageReadable}}.- Overview' accordianDesc='Experience the majestic beauty of the Himalayas with our Shimla Manali Tour Package, starting from Delhi. This 7-day journey takes you through the serene landscapes of Shimla and the adventurous terrains of Manali, offering a perfect blend of nature, adventure, and culture.' />
            <x-package-accordian accordianCollapsed='collapsed' accordianShowClass='nothing' accordianSNo='02' accordianID='secondaccordian'  accordianTitle='Shimla' accordianDesc='Explore the charming hill station of Shimla, known for its colonial architecture, vibrant markets, and panoramic views. Visit key attractions like the Mall Road, Jakhoo Temple, and Kufri.' />
            <x-package-accordian accordianCollapsed='collapsed' accordianShowClass='nothing' accordianSNo='03' accordianID='thirdccordian'  accordianTitle='Manali' accordianDesc='Discover the enchanting valley of Manali, famous for its stunning scenery, snow-capped mountains, and adventure activities. Enjoy visits to the Hidimba Temple, Solang Valley, and Rohtang Pass (subject to availability and weather conditions).' />
            <x-package-accordian accordianCollapsed='collapsed' accordianShowClass='nothing' accordianSNo='04' accordianID='forthaccordian'  accordianTitle='Cultural Experiences' accordianDesc='Immerse yourself in the local culture with visits to traditional villages, local markets, and cultural performances.' />
            <x-package-accordian accordianCollapsed='collapsed' accordianShowClass='nothing' accordianSNo='05' accordianID='fifthaccordian'  accordianTitle='Comfortable Travel' accordianDesc=' Enjoy comfortable transportation in an air-conditioned coach and accommodation in carefully selected hotels.' />
            <x-package-accordian accordianCollapsed='collapsed' accordianShowClass='nothing' accordianSNo='06' accordianID='sixthaccordian'  accordianTitle='Conclusion' accordianDesc="This tour is ideal for couples, families, and adventure enthusiasts looking to explore the pristine beauty and cultural richness of Himachal Pradesh. Whether you're seeking a peaceful retreat or thrilling adventures, this package offers a memorable and diverse travel experience." />
        </div>
</div>
        <div id="inclusion" class="cards">
  <div class="accordion ">
            <x-package-accordian accordianCollapsed='nothing'  accordianShowClass='show' accordianSNo='01' accordianID='firstaccordian' accordianTitle='Accommodation' accordianDesc='5 nights stay in a 4-star hotel (double occupancy).' />
            <x-package-accordian accordianCollapsed='collapsed' accordianShowClass='nothing' accordianSNo='02' accordianID='secondaccordian'  accordianTitle='Meals' accordianDesc='Daily breakfast and dinner at the hotel, 2 lunches at local restaurants.' />
            <x-package-accordian accordianCollapsed='collapsed' accordianShowClass='nothing' accordianSNo='03' accordianID='forthaccordian'  accordianTitle='Transportation' accordianDesc='Airport transfers, all ground transportation in an air-conditioned coach.' />
            <x-package-accordian accordianCollapsed='collapsed' accordianShowClass='nothing' accordianSNo='04' accordianID='fifthaccordian'  accordianTitle='Guided Tours' accordianDesc='Professional English-speaking tour guide for all scheduled excursions.' />
            <x-package-accordian accordianCollapsed='collapsed' accordianShowClass='nothing' accordianSNo='05' accordianID='sixthaccordian'  accordianTitle='Entrance Fees' accordianDesc="Admission to all listed attractions and sites." />
            <x-package-accordian accordianCollapsed='collapsed' accordianShowClass='nothing' accordianSNo='06' accordianID='seventhaccordian'  accordianTitle='Activities' accordianDesc="Sunset cruise, cultural performance, guided city tour." />
            <x-package-accordian accordianCollapsed='collapsed' accordianShowClass='nothing' accordianSNo='07' accordianID='eighthaccordian'  accordianTitle='Taxes and Fees' accordianDesc="All applicable taxes, fees, and service charges." />
        </div>
</div>
        <div id="exclusion" class="cards">
  <div class="accordion ">
            <x-package-accordian accordianCollapsed='nothing'  accordianShowClass='show' accordianSNo='01' accordianID='firstaccordian' accordianTitle='Flights' accordianDesc='International and domestic airfare.' />
            <x-package-accordian accordianCollapsed='collapsed' accordianShowClass='nothing' accordianSNo='02' accordianID='secondaccordian'  accordianTitle='Travel Insurance' accordianDesc='Personal travel insurance (highly recommended).' />
            <x-package-accordian accordianCollapsed='collapsed' accordianShowClass='nothing' accordianSNo='04' accordianID='forthaccordian'  accordianTitle='Meals' accordianDesc='Lunches and any meals not specified in the inclusions.' />
            <x-package-accordian accordianCollapsed='collapsed' accordianShowClass='nothing' accordianSNo='05' accordianID='fifthaccordian'  accordianTitle='Personal Expenses' accordianDesc=' Items of a personal nature such as souvenirs, laundry, and telephone calls.' />
            <x-package-accordian accordianCollapsed='collapsed' accordianShowClass='nothing' accordianSNo='06' accordianID='sixthaccordian'  accordianTitle='Optional Activities' accordianDesc="Any optional tours or activities not specified in the itinerary." />
            <x-package-accordian accordianCollapsed='collapsed' accordianShowClass='nothing' accordianSNo='07' accordianID='seventhaccordian'  accordianTitle='Tips' accordianDesc="Gratuities for guides, drivers, and hotel staff." />
            <x-package-accordian accordianCollapsed='collapsed' accordianShowClass='nothing' accordianSNo='08' accordianID='eightthaccordian'  accordianTitle='Visa Fees' accordianDesc="Entry visas and associated costs." />
            <x-package-accordian accordianCollapsed='collapsed' accordianShowClass='nothing' accordianSNo='09' accordianID='ninethaccordian'  accordianTitle='Extra Services' accordianDesc="Early check-in or late check-out at hotels, additional nights, or room upgrades." />
        </div>
</div>
</div>
</div>
</div>
</div>
<div id="side-section">
    <x-book-this-tour-form tourName="{{$packageReadable}}" />
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

    <x-packages-tags tagName='Shimla' />
    <x-packages-tags tagName='Amritsar' />
    <x-packages-tags tagName='Jibhi' />
    <x-packages-tags tagName='Dharamshala' />
    <x-packages-tags tagName='Manali' />
    <x-packages-tags tagName='Kasol' />
    <x-packages-tags tagName='Kullu' />
    <x-packages-tags tagName='Kufri' />
    <x-packages-tags tagName='Offbeat Himachal' />
    <x-packages-tags tagName='Tirthan Valley' />
  
    
</div>
</div>

        </div>
    </div>
</section>
<script src="{{ url('js/destinationPackageDetails.js') }}"></script>
<script src="{{ secure_url('js/destinationPackageDetails.js') }}"></script>

@endsection