<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;

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

Route::get('/', [ Postcontroller::class , 'index'])->name('home');

Route::post('/', [ Postcontroller::class , 'newsletter']);

Route::get('/about', [ Postcontroller::class , 'about'])->name('about');

Route::get('/contact', [ Postcontroller::class , 'contact'])->name('contact');

Route::post('/contact', [ Postcontroller::class , 'contactform'])->name('contactform');

Route::get('/pricing', [ Postcontroller::class , 'pricing'])->name('pricing');

Route::get('/service', [ Postcontroller::class , 'service'])->name('service');

Route::get('/portfolio1', [ Postcontroller::class , 'portfolio1'])->name('portfolio1');

Route::get('/portfolio2', [ Postcontroller::class , 'portfolio2'])->name('portfolio2');

Route::get('/portfolio3', [ Postcontroller::class , 'portfolio3'])->name('portfolio3');

Route::get('/portfolio4', [ Postcontroller::class , 'portfolio4'])->name('portfolio4');

Route::get('resources/views/layouts/partials/navbar', [ Postcontroller::class , 'navbar'])->name('navbar');