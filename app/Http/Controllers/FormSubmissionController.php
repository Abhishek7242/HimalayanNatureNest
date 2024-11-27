<?php

namespace App\Http\Controllers;

use App\Models\Booknowform;
use App\Models\BookOurService;
use App\Models\BookThisTour;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // Ensure correct import

class FormSubmissionController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:225',
            'email' => 'required|email|max:225',
            'number' => 'required|numeric',
            'destination' => 'required|string|max:225',
        ]);

        // Check if the validation fails
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()->toArray(),
            ], 422);
        }
    

        // If validation passes, you can save the data
        // Uncomment and use if you have a corresponding model
        
       $booking = new Booknowform(); 
$booking->name = $request->name;
$booking->email = $request->email;
$booking->number = $request->number;
$booking->destination = $request->destination; 
$booking->save();
        

        // Return a success response
        return response()->json([
            'success' => true,
            'message' => 'Client added successfully',
        ], 201); // 201 Created
    }
    public function serviceformsubmit(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'serviceTitle' => 'required|string|max:225',
            'name' => 'required|string|max:225',
            'email' => 'required|email|max:225',
            'number' => 'required|numeric',
            'date' => 'required|string|max:225',
            'city' => 'required|string|max:225',
        ]);

        // Check if the validation fails
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()->toArray(),
            ], 422);
        }


     $booking = new BookOurService(); 
$booking->serviceTitle = $request->serviceTitle;
$booking->name = $request->name;
$booking->email = $request->email;
$booking->number = $request->number;
$booking->date = $request->date;
$booking->city = $request->city;
$booking->save();
        // Return a success response
 return response()->json([
    'success' => true,
    'message' => 'Client added successfully',
    'data' => $request->all(),
], 201);
    }
    public function tourformsubmit(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'tourTitle' => 'required|string|max:225',
            'name' => 'required|string|max:225',
            'email' => 'required|email|max:225',
            'number' => 'required|numeric',
            'date' => 'required|string|max:225',
            'adult' => 'required|string|max:225',
            'child' => 'required|string|max:225',
        ]);

        // Check if the validation fails
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()->toArray(),
            ], 422);
        }


        // If validation passes, you can save the data
        // Uncomment and use if you have a corresponding model
        
   $booking = new BookThisTour(); 
$booking->tourTitle = $request->tourTitle;
$booking->name = $request->name;
$booking->email = $request->email;
$booking->number = $request->number;
$booking->adult = $request->adult;
$booking->child = $request->child;
$booking->date = $request->date;
$booking->save();
        // Return a success response
 return response()->json([
    'success' => true,
    'message' => 'Client added successfully',
    'data' => $request->all(),
], 201);
    }

    public function contactus(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:225',
            'email' => 'required|email|max:225',
            'number' => 'required|numeric',
           
        ]);

        // Check if the validation fails
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()->toArray(),
            ], 422);
        }


        // If validation passes, you can save the data
        // Uncomment and use if you have a corresponding model
        
   $contact = new ContactForm();
    
        $contact->name = $request->name;
$contact->email = $request->email;
$contact->number = '+' . $request->countryCode . $request->number;
$contact->message = $request->message? $request->message:'';
$contact->save();
        // Return a success response
 return response()->json([
    'success' => true,
    'message' => 'Client added successfully',
    'data' => $request->all(),
], 201);
    }

}