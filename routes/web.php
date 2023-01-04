<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerReviewController;
use App\Http\Controllers\PaymentPageController;
use App\Http\Controllers\PaymentConfirmController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeEmail;
use App\Http\Controllers\UpeventController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OrderhistoryController;
use App\Http\Controllers\HomepageController;


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

/*Route::get('/', function () {
    return view('AboutUs/AboutUs');
});*/

/*Route::get('/CustomerReview', function () {
    return view('CustomerReview/CustomerReview');
});*/

/*Route::get('/CareerPage', function () {
    return view('CareerPage/CareerPage');
});*/

/*Route::get('/Payment', function () {
    return view('Payment/PaymentConfirmPage');
});*/
Route::get('/', function () {
    return view('welcome');
});


Route::get('/discount', function () {
    return view('Discount/Discount');
});


Route::get('/Career', function () {
    return view('CareerPage/CareerPage');
});
/*Route::get('/AboutUs', function () {
    return view('AboutUs/AboutUs');
});*/
Route::resource('ordermeals', \App\Http\Controllers\TakeOrdersController::class);
Route::resource('Cart', \App\Http\Controllers\CartController::class);

Route::resource('PaymentConfirmPage', PaymentConfirmController::class);
Route::resource('ConfirmOrder', \App\Http\Controllers\Confirmordercontroller::class);
Route::resource('AboutUs',\App\Http\Controllers\AboutUsController::class);

Route::resource('CustomerReview',CustomerReviewController::class);
Route::resource('CareerPage',\App\Http\Controllers\CareerPageController::class);
Route::resource('Payment',PaymentPageController::class);

Route::get('/event',[EventController::class, 'index']);
Route::resource('Upevent', UpeventController::class);
Route::get('/orderhistory',[OrderhistoryController::class, 'index']);

Route::resource('discount', \App\Http\Controllers\discount::class);
Route::resource('Admin', \App\Http\Controllers\AdminController::class);





Route::get('/Homepage', [HomepageController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home',[HomepageController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('sendmail',[WelcomeEmail::class,'sendWelcomeEmail']);

require __DIR__.'/auth.php';











