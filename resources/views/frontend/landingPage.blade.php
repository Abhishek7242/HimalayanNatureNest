@extends('frontend/layouts/main')
@section('main-section')
<script>
let bookingNavColor = "blue"; // PHP variable

</script>
<main>

    @include('frontend/landingPage/intro')
    @include('frontend/landingPage/bookNowForm')
    @include('frontend/landingPage/destinations')
    @include('frontend/landingPage/popularAdventures')
    @include('frontend/landingPage/topAdventures')
    @include('frontend/landingPage/bookNowSection')
    @include('frontend/landingPage/holidayOfferSection')
    @include('frontend/landingPage/clientsReviewsSection')
    @include('frontend/landingPage/ourServices')
</main>
<script src="{{ url('js/scrollEvents.js') }}"></script>

@endsection