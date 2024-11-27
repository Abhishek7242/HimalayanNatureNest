<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminCpntroller;
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
use App\Http\Controllers\TourController;
use App\Models\Admin;
use App\Models\Booknowform;
use App\Models\BookOurService;
use App\Models\BookThisTour;
use App\Models\TourDetail;
use App\View\Components\OurServiceForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

Route::get('/admin/tour-form', function () {
    if ( session('loggedIn') == true) {
        // Only allow access if the user is logged in
    $AllPackages = TourDetail::select('*', 'my_row_id')->get();
        return view('admin.addTourDetails', compact('AllPackages'));
    }
    return redirect()->route('login'); 
})->name('tourForm');

Route::get('/admin/viewbookings', function () {
    if (session()->has('loggedIn') && session('loggedIn') == true) {
        $TourBookings = BookThisTour::paginate(15);
        $bookNowDetails = Booknowform::paginate(15);
        $servicesDetails = BookOurService::paginate(15);
        return view('admin.viewBookings', compact('TourBookings', 'bookNowDetails', 'servicesDetails'));
    }
    return redirect()->route('login'); 
});

Route::post('/submit-tour', [TourController::class, 'submitTour'])->name('submitTour');
Route::post('/tour/update/{id}', [TourController::class, 'updateTour'])->name('updateTour');


Route::get('/admin/login', function () {
    echo 'Session login: ' . session('loggedIn');

    return view('admin/adminLogin');
})->name('login');

Route::post('/admin/login', [AdminCpntroller::class, 'adminlogin']);

// Route::get('/make/admin', function () {
//             $email = 'sukantsharma8199@gmail.com';
//             $password = Hash::make('gGjD26fHvshs36D6yuf');
//             $admin = new Admin();
//             $admin->email = $email;
//             $admin->password = $password;
//             $admin->save();
//             echo 'Succefully created';
//         });
Route::get('/admin/LogOut', function () {
    session()->forget('loggedIn');
    return redirect('/admin/login');
});
Route::post('/admin/signup', [AdminCpntroller::class, 'register'])->name('adminsignup');
