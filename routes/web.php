<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\ConsultingController;
use App\Http\Controllers\SocialworkController;

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

Route::get('/', [ HomeController::class , 'create'])->name('home');
Route::post('/', [ HomeController::class , 'store'])->name('newsletter');

Route::get('/about', [ AboutController::class , 'create'])->name('about');
Route::post('/about', [ AboutController::class , 'store']);

Route::get('/ecommerce', [ EcommerceController::class , 'create'])->name('ecommerce');
Route::post('/ecommerce', [ EcommerceController::class , 'store']);

Route::get('/consulting', [ ConsultingController::class , 'create'])->name('consulting');
Route::post('/consulting', [ ConsultingController::class , 'store']);

Route::get('/socialwork', [ SocialworkController::class , 'create'])->name('socialwork');
Route::post('/socialwork', [ SocialworkController::class , 'store']);


Route::get('/contact', [ ContactController::class , 'create'])->name('contact');
Route::post('/contact', [ ContactController::class , 'store'])->name('contactform');
Route::post('/contact', [ ContactController::class , 'storenew']);


Route::get('/pricing', [ PricingController::class , 'create'])->name('pricing');
Route::post('/pricing', [ PricingController::class , 'store']);

Route::get('/service', [ ServiceController::class , 'create'])->name('service');
Route::post('/service', [ ServiceController::class , 'store']);

Route::get('/portfolio1', [ HomeController::class , 'portfolio1'])->name('portfolio1');

Route::get('/portfolio2', [ HomeController::class , 'portfolio2'])->name('portfolio2');

Route::get('/portfolio3', [ HomeController::class , 'portfolio3'])->name('portfolio3');

Route::get('/portfolio4', [ HomeController::class , 'portfolio4'])->name('portfolio4');
