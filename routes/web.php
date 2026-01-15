<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\PaymentMethodController;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/signin', [PagesController::class, 'signin'])->name('signin');
Route::get('/signup', [PagesController::class, 'signup'])->name('signup');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/news', [PagesController::class, 'news'])->name('news');
Route::get('/news/{id}', [PagesController::class, 'news_detail'])->name('news_detail');
Route::get('/faq', [PagesController::class, 'faq'])->name('faq');
Route::get('/donation', [PagesController::class, 'donation'])->name('donation');
Route::get('/donation/{id}', [PagesController::class, 'donation_detail'])->name('donation_detail');
Route::get('/testimony', [PagesController::class, 'testimony'])->name('testimony');

Route::post('/contact', [PagesController::class, 'submitContact'])->name('contact.submit');
Route::post('/donars', [PagesController::class, 'submitDonation'])->name('donation.submit');

/*
|--------------------------------------------------------------------------
| Admin Password Lock
|--------------------------------------------------------------------------
*/
Route::get('/admin/lock', fn () => view('admin.lock'))->name('admin.lock');

Route::post('/admin/unlock', function (Request $request) {
    if ($request->password === config('custom.password')) {
        session(['admin_passed' => true]);
        return redirect('/admin');
    }

    return back()->withErrors([
        'password' => 'Wrong password',
    ]);
})->name('admin.unlock');

/*
|--------------------------------------------------------------------------
| Admin Entry Point
|--------------------------------------------------------------------------
*/
Route::get('/admin', fn () =>
    redirect()->route('admin.payment-methods.index')
);

/*
|--------------------------------------------------------------------------
| Admin Protected Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')
    ->middleware('admin.lock')
    ->name('admin.')
    ->group(function () {
        Route::resource('payment-methods', PaymentMethodController::class);
    });

/*
|--------------------------------------------------------------------------
| Admin Logout
|--------------------------------------------------------------------------
*/
Route::post('/admin/logout', function () {
    session()->forget('admin_passed');
    return redirect('/');
})->name('admin.logout');
