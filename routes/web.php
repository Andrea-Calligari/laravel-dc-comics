<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

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
    return view('pages.welcome');
})->name('home');


// CRUD 

//index
Route::get('/comics',[ComicController::class, 'index'])->name('index');

//create
Route::get('/comics/create', [ComicController::class,'create'])->name('create');

//show
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('show');

//store
Route::post('/comics/store', [ComicController::class,'store'])->name('store');

Route::get('/comics/{comic}/edit',[ComicController::class,'edit'])->name('edit');