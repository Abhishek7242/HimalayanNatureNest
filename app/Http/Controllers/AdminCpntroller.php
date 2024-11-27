<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminCpntroller extends Controller
{
    //
    public function adminlogin(Request $request)
    {

        $validatedData =  $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $email = $validatedData['email'];
        $password = $validatedData['password'];
        $admin = Admin::where('email', $email)->first();

        // Check if the admin exists and the password matches
        if ($admin && Hash::check($password, $admin->password)) {
            // Login the admin
            // Auth::login($admin);
            session(['loggedIn' => true]);
            return redirect()->intended('/admin/tour-form'); // Redirect to dashboard or home

            // // Return a success response
            // return response()->json(['message' => 'Login successful'], 200);
        } else {
            // Return an error response
            return response()->json(['message' => 'Invalid email or password'], 401);
        }
    }

    // Handle the signup logic

}
