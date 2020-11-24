<?php

use App\Http\Controllers\DashboardController;
use App\Http\Livewire\Checkout;
use App\Http\Livewire\Contact;
use App\Http\Livewire\ProductDetails;
use App\Http\Livewire\ProductList;
use App\Http\Livewire\Thanks;
use Illuminate\Support\Facades\Route;

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

Route::middleware('cache.headers:public;max_age=2628000;etag')->group(
    function () {
        Route::view('terms', 'terms')
            ->name('terms');

        Route::view('privacy', 'privacy')
            ->name('privacy');

        Route::view('about', 'about')
            ->name('about');

        Route::get('contact', Contact::class)
            ->name('contact');

        Route::get('/', ProductList::class)
            ->name('welcome');

        Route::get('/products/{product}', ProductDetails::class)
            ->name('products.show');

        Route::get('/checkout', Checkout::class)
            ->name('checkout');

        Route::get('thanks/{cart}', Thanks::class)
            ->name('thanks')
            ->middleware('signed');
    }
);

Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');
