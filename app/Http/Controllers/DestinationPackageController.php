<?php

namespace App\Http\Controllers;

use App\Models\OfferPackage;
use App\Models\TourDetail;
use App\View\Components\OfferPackages;
use Illuminate\Http\Request;

class DestinationPackageController extends Controller
{
    //
    public function index($destination,$package)
    {
        $packageReadable = str_replace('-', ' ', ucwords($package, '-'));
        $packageReadableTrimmed = substr($package, 0, 15);
        $breadcrumbs = [
            ["name" => "Home", "url" => "/"],
            ["name" => $destination, "url" => "/destination/".$destination],
            ["name" => $packageReadableTrimmed.'...', "url" => "#"]
        ];
        $tourPackageDetails = TourDetail::where('tourPackageTitle', $packageReadable)->first();
        $offerPackage = OfferPackage::where('title', $packageReadable)->first();
        $breadcrumbImageUrl = $tourPackageDetails->tourPackageImage ?? $offerPackage->images;
$AllofferPackages = OfferPackage::all();

        // return view('frontend.destinationPage', ['destination' => $destination]);
        return view('frontend.destinationPackageDetails', compact('AllofferPackages','breadcrumbs','package', 'destination', 'packageReadable', 'packageReadableTrimmed', 'breadcrumbImageUrl'));
    }
}
