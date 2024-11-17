<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\DestinationPackageController;
use App\Http\Controllers\OurServicesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend/landingPage');
});
Route::get('/contact-us', [ContactController::class, 'index']);
Route::get('/about-us', [AboutUsController::class, 'index']);
Route::get('/destination/{destination}', [DestinationController::class, 'index']);
Route::get('/destination/{destination}/{package}', [DestinationPackageController::class, 'index']);
Route::get('/{service}', [OurServicesController::class, 'index']);

// composer create-project --prefer-dist laravel/laravel webbru "8.*"
