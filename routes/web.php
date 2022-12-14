<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\JobapplyController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\ConsultingController;
use App\Http\Controllers\SocialworkController;
use App\Http\Controllers\TraitementController;
use App\Http\Controllers\JobapplyformController;

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

Route::get('/connexion', [ ConnexionController::class , 'create'])->name('connexion');
Route::post('/connexion', [ ConnexionController::class , 'store'])->name('traitementconnexion');

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
Route::post('/contact', [ ContactController::class , 'storenew']);


Route::get('/pricing', [ PricingController::class , 'create'])->name('pricing');
Route::post('/pricing', [ PricingController::class , 'store']);

Route::get('/service', [ ServiceController::class , 'create'])->name('service');
Route::post('/service', [ ServiceController::class , 'store']);

Route::get('/apply', [ ApplyController::class , 'create'])->name('Apply');
Route::get('/apply/{job}', [ ApplyController::class , 'store']);
Route::get('/apply/{job}/{valueclause}', [ ApplyController::class , 'sort'])->name('trietype');

Route::get('/jobapplyform/{id}', [ JobapplyformController::class , 'create'])->name('jobapplyform');
Route::post('/jobapplyform/{id}', [ JobapplyformController::class , 'store']);

Route::get('/portfolio1', [ HomeController::class , 'portfolio1'])->name('portfolio1');

Route::get('/portfolio2', [ HomeController::class , 'portfolio2'])->name('portfolio2');

Route::get('/portfolio3', [ HomeController::class , 'portfolio3'])->name('portfolio3');

Route::get('/portfolio4', [ HomeController::class , 'portfolio4'])->name('portfolio4');

Route::post('send-form', [ TraitementController::class , 'create'])->name('traitement');