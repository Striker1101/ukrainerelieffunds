<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
Route::get('/admin', [PagesController::class, 'admin'])->name('admin');
Route::post('/contact', [PagesController::class, 'submitContact'])
    ->name('contact.submit');
Route::post('/donars', [PagesController::class, 'submitDonation'])
    ->name('donation.submit');
