<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //
    public function index()
    {
        $breadcrumbs = [
            ["name" => "Home", "url" => "/"],
            ["name" => "Contact us", "url" => "/contact-us"],
            ["name" => "About us", "url" => "#"]
        ];
        return view('frontend.aboutUsPage', compact('breadcrumbs'));
    }
}
