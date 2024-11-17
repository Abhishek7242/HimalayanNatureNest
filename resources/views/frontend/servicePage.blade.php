@extends('frontend/layouts/main')
@section('main-section')
<main>
<script>
let bookingNavColor = "{{ $serviceData['backgroundColor']}}"; // PHP variable

    let backgroundColor = "{{ $serviceData['backgroundColor']}}"; // PHP variable
    let backgroundMiddleImage = "{{ $serviceData['images'][3] }}"; // PHP variable

    document.addEventListener('DOMContentLoaded', () => {
        const bookingFormThemeColor = backgroundColor; // Set your dynamic color here
        const servicePageMiddleImage = `url('${backgroundMiddleImage}')`; // Set your dynamic image URL here

        document.documentElement.style.setProperty('--booking-form-theme-color', bookingFormThemeColor);
        document.documentElement.style.setProperty('--service-page-middle-image', servicePageMiddleImage);
    });
</script>

    <x-breadcrumbs name="{{$serviceReadable}}" imgUrl="{{ $serviceData['images'][0] }}" :breadcrumbs="$breadcrumbs" />
  <x-our-service serviceName="{{$getserviceName}}"  :serviceData="$serviceData" bookingName="{{$serviceReadable}}" />

<div id="booking-form">
    <x-our-service-form serviceName="{{$getserviceName}}" name="{{$serviceReadable}}"  formImage="{{$serviceData['images'][2]}}" />
</div>

</main>


@endsection