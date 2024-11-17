<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Himalayan - Nature Nest</title>
    {{-- 
    <link rel="stylesheet" href="{{ url('css/intro.css') }}">
    <link rel="stylesheet" href="{{ url('css/viewTransactions.css') }}"> --}}

<link rel="stylesheet" href="{{ secure_asset('css/startingAnimation.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/navbar.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/intro.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/bookNowForm.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/destinations.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/popularAdventures.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/topAdventures.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/bookNowSection.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/holidayOfferSection.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/clientsReviewsSection.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/ourServices.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/footer.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/breadcrumbs.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/contact-us.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/about-us.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/experienceSection.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/ourMission.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/destinationPage.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/tourPackageComponent.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/bookThisTourForm.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/offerPackages.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/packagesTags.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/destinationPackageDetails.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/packageAccordian.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/ourService.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/ourServiceForm.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/contactForm.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/utility.css') }}">

<link rel="stylesheet" href="{{ asset('css/utility.css') }}">
<link rel="stylesheet" href="{{ asset('css/startingAnimation.css') }}">
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/intro.css') }}">
<link rel="stylesheet" href="{{ asset('css/bookNowForm.css') }}">
<link rel="stylesheet" href="{{ asset('css/destinations.css') }}">
<link rel="stylesheet" href="{{ asset('css/popularAdventures.css') }}">
<link rel="stylesheet" href="{{ asset('css/topAdventures.css') }}">
<link rel="stylesheet" href="{{ asset('css/bookNowSection.css') }}">
<link rel="stylesheet" href="{{ asset('css/holidayOfferSection.css') }}">
<link rel="stylesheet" href="{{ asset('css/clientsReviewsSection.css') }}">
<link rel="stylesheet" href="{{ asset('css/ourServices.css') }}">
<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
<link rel="stylesheet" href="{{ asset('css/breadcrumbs.css') }}">
<link rel="stylesheet" href="{{ asset('css/contact-us.css') }}">
<link rel="stylesheet" href="{{ asset('css/about-us.css') }}">
<link rel="stylesheet" href="{{ asset('css/experienceSection.css') }}">
<link rel="stylesheet" href="{{ asset('css/ourMission.css') }}">
<link rel="stylesheet" href="{{ asset('css/destinationPage.css') }}">
<link rel="stylesheet" href="{{ asset('css/tourPackageComponent.css') }}">
<link rel="stylesheet" href="{{ asset('css/bookThisTourForm.css') }}">
<link rel="stylesheet" href="{{ asset('css/offerPackages.css') }}">
<link rel="stylesheet" href="{{ asset('css/packagesTags.css') }}">
<link rel="stylesheet" href="{{ asset('css/destinationPackageDetails.css') }}">
<link rel="stylesheet" href="{{ asset('css/packageAccordian.css') }}">
<link rel="stylesheet" href="{{ asset('css/ourService.css') }}">
<link rel="stylesheet" href="{{ asset('css/ourServiceForm.css') }}">
<link rel="stylesheet" href="{{ asset('css/contactForm.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



</head>

<body class="position-relative">

    <header>
        <nav id="navbar" class="">
            <div id="navbar-inner-container">
                <div id="navbar-logo-container" class="onload-container">
                    <img src="https://png.pngtree.com/png-vector/20220825/ourmid/pngtree-nature-logo-design-vector-free-png-png-image_6123147.png"
                        alt="">
                </div>
                <div id="navigation-menu">
                    <ul id="lap-nav" class="onload-container">
                        <li class="nav-btns active" ><a  href="/">Home</a></li>
                        <li class="nav-btns"><a  href="/about-us">About Us</a></li>
                        <li class="nav-btns" ><a  href="/contact-us">Contact Us</a></li>
                        <li class="booking-dropdown" >
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Booking
                            </a>
                            <ul class="booking-dropdown-menu " data-hidden='true'>
                                <li><a class="booking-dropdown-item" href="/cab-booking">Cab Booking</a></li>
                                <li><a class="booking-dropdown-item" href="/volvo-booking">Volvo Booking</a></li>
                                <li><a class="booking-dropdown-item" href="/railway-booking">Railway Booking</a></li>
                                <li><a class="booking-dropdown-item" href="/flight-booking">Flight Booking</a></li>
                                <li><a class="booking-dropdown-item" href="/hotel-booking">Hotel Booking</a></li>

                            </ul>
                        </li>
                        <span></span>
                    </ul>
                    <div id="ham-icon" class="onload-container">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/></svg>
                    </div>
                    <ul id="mobile-nav">
                        <li id="cut-btn" class="nav-btns " ><a  href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg></a></li>
                        <li class="nav-btns active" ><a  href="/">Home</a></li>
                        <li class="nav-btns"><a  href="/about-us">About Us</a></li>
                        <li class="nav-btns" ><a  href="/contact-us">Contact Us</a></li>
                        <li class="nav-btns booking-dropdown" id="booking-dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Booking
                            </a>
                            <ul class="booking-dropdown-menu hide" data-hidden='true'>
                                <li><a class="booking-dropdown-item" href="/cab-booking">Cab Booking</a></li>
                                <li><a class="booking-dropdown-item" href="/hotel-booking">Hotel Booking</a></li>
                                <li><a class="booking-dropdown-item" href="/volvo-booking">Volvo Booking</a></li>
                                <li><a class="booking-dropdown-item" href="/flight-booking">Flight Booking</a></li>
                                <li><a class="booking-dropdown-item" href="/railway-booking">Railway Booking</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        {{-- // Back to top btn  --}}

        <button id="back-to-top-btn" onclick="topFunction()" title="Go to top">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                        d="M156.6 384.9L125.7 354c-8.5-8.5-11.5-20.8-7.7-32.2c3-8.9 7-20.5 11.8-33.8L24 288c-8.6 0-16.6-4.6-20.9-12.1s-4.2-16.7 .2-24.1l52.5-88.5c13-21.9 36.5-35.3 61.9-35.3l82.3 0c2.4-4 4.8-7.7 7.2-11.3C289.1-4.1 411.1-8.1 483.9 5.3c11.6 2.1 20.6 11.2 22.8 22.8c13.4 72.9 9.3 194.8-111.4 276.7c-3.5 2.4-7.3 4.8-11.3 7.2v82.3c0 25.4-13.4 49-35.3 61.9l-88.5 52.5c-7.4 4.4-16.6 4.5-24.1 .2s-12.1-12.2-12.1-20.9V380.8c-14.1 4.9-26.4 8.9-35.7 11.9c-11.2 3.6-23.4 .5-31.8-7.8zM384 168a40 40 0 1 0 0-80 40 40 0 1 0 0 80z" />
                </svg> </span>
        </button>

        {{-- // Back to top btn  --}}
    </header>
