<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        $breadcrumbs = [
            ["name" => "Home", "url" => "/"],
            ["name" => "About us", "url" => "/about-us"],
            ["name" => "Contact us", "url" => "#"]
        ];
      
        return view('frontend.contactPage', compact('breadcrumbs'));
    }
    
}
