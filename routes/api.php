<?php

use App\Http\Controllers\FormSubmissionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/submit', [FormSubmissionController::class, 'submit']);
Route::post('/our-service-form-submit', [FormSubmissionController::class, 'serviceformsubmit']);
Route::post('/tour-form-submit', [FormSubmissionController::class, 'tourformsubmit']);
Route::post('/contact-us', [FormSubmissionController::class, 'contactus']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
