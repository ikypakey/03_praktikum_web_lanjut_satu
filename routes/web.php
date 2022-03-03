<?php

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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;

//--Route Home -Menampilkan Halaman Home----//
Route::get('/', [HomeController::class, 'home']);

//--Route Prefix Product----//
Route::prefix('/product')->group(function(){
    Route::get('/kapas', [ProductController::class, 'product1']);
    Route::get('/gunting', [ProductController::class, 'product2']);
    Route::get('/obeng', [ProductController::class, 'product3']);
});

//--Route Param News--//
Route::get('news', [NewsController::class, 'news']);
Route::get('news/{title}', [NewsController::class, 'news']);

//--Route Prefix Program--//
Route::prefix('/program')->group(function(){
    Route::get('/sql', [ProgramController::class, 'program1']);

    Route::get('/vscode', [ProgramController::class, 'program2']);

    Route::get('/star', [ProgramController::class, 'program3']);
});

//--Route Biasa About Us--//
Route::get('/about-us',[AboutUsController::class, 'aboutUs']);

//--Route Resource Contact Us--//
Route::resource('/contact-us', ContactUsController::class, [
    'only' => ['index']
]);



