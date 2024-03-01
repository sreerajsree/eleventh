<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MainController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});

Route::view('about', 'pages.about')->name('about');
Route::view('services', 'pages.services')->name('services');
Route::get('contact', [MainController::class, 'contact'])->name('contact');
Route::post('contact', [MainController::class, 'contactStore'])->name('contact.store');
Route::post('newsletter', [MainController::class, 'newsletterStore'])->name('newsletter.store');
Route::post('brands', [MainController::class, 'brandsStore'])->name('brands.store');
Route::view('brands-for-sale/ecommerce-phone-cases', 'pages.sale.ecommercePhone')->name('ecommercePhone');
Route::view('brands-for-sale/ecommerce-clothing', 'pages.sale.ecommerceClothing')->name('ecommerceClothing');
Route::view('services/branding', 'pages.branding')->name('branding');
Route::view('services/brands-for-sale', 'pages.brandsforsale')->name('brandsforsale');
Route::view('services/concept-creation', 'pages.concept')->name('concept');
Route::view('services/marketing-and-content-creation', 'pages.marketing')->name('marketing');

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
