<?php

namespace App\Http\Controllers;

use App\Models\OfferPackage;
use App\Models\TourDetail;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    //
    public function index($destination)
    {
        $breadcrumbs = [
            ["name" => "Home", "url" => "/"],
            ["name" => "Contact us", "url" => "/contact-us"],
            ["name" => "About us", "url" => "/about-us"],
            ["name" => $destination, "url" => "#"]
        ];
 
    
        $AllofferPackages = OfferPackage::all();
    $AllTourDetails = TourDetail::where('tourTitle', ucfirst($destination))->get();
        $breadcrumbImageUrl = $AllTourDetails[0]->tourCoverImage ?? 'https://ei.phncdn.com/videos/202309/30/440385741/original/(m=eGNdHgaaaa)(mh=dAGrsTF7NVVTmYLp)13.jpg';
        
        // Handle the request, perhaps fetch destination details from the database
        // return view('frontend.destinationPage', ['destination' => $destination]);
        return view('frontend.destinationPage', compact('breadcrumbs', 'AllofferPackages', 'AllTourDetails', 'breadcrumbImageUrl'), ['destination' => $destination]);
    }
}
