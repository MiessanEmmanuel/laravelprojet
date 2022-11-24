<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ServiceController;

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

Route::get('/', [ HomeController::class , 'index'])->name('home');

Route::post('/', [ HomeController::class , 'newsletter']);

Route::get('/about', [ AboutController::class , 'about'])->name('about');

Route::get('/contact', [ ContactController::class , 'contact'])->name('contact');

Route::post('/contact', [ ContactController::class , 'contactform'])->name('contactform');

Route::get('/pricing', [ PricingController::class , 'pricing'])->name('pricing');

Route::get('/service', [ ServiceController::class , 'service'])->name('service');

Route::get('/portfolio1', [ HomeController::class , 'portfolio1'])->name('portfolio1');

Route::get('/portfolio2', [ HomeController::class , 'portfolio2'])->name('portfolio2');

Route::get('/portfolio3', [ HomeController::class , 'portfolio3'])->name('portfolio3');

Route::get('/portfolio4', [ HomeController::class , 'portfolio4'])->name('portfolio4');
