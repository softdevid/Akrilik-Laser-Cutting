<?php

use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class, 'index']);

Route::get('/services', [HomeController::class, 'services']);
Route::resource('/services', ServicesController::class);

Route::get('/portfolio', [HomeController::class, 'portfolio']);
Route::resource('/portfolio', PortfolioController::class);

Route::get('/talk', [HomeController::class, 'talk']);

Route::get('/product', [HomeController::class, 'product']);


// Route::get('/blog', [HomeController::class, 'blog']);
// Route::resource('/blog', BlogController::class);

//route learn more services
// Route::get('/services/{services:slug}', function (Services $services) {
//     return view('services.detail-services', ['services' => $services]);
// })->name('services');


// route untuk about
Route::get('/profile', [HomeController::class, 'profile']);

Route::get('/team', [HomeController::class, 'team']);
Route::resource('team', TeamController::class);

Route::get('/work-phase', [HomeController::class, 'workphase']);

Route::get('/scope-of-work', [HomeController::class, 'sow']);

Route::get('/faq', [HomeController::class, 'faq']);
