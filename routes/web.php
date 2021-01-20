<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;

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

//Route::get('/{any}', function () {
//    return view('app');
//})->where('any','.*');

Route::get('/',[PagesController::class,'index'])->name('index');

Route::get('/login',[PagesController::class,'login'])->name('login');
Route::get('/register',[PagesController::class,'register'])->name('register');

Route::post('/login',[AuthController::class,'login'])->name('do.login');
Route::post('/register',[AuthController::class,'register'])->name('do.register');

Route::middleware('auth')->group(function (){
    Route::get('/contacts',[PagesController::class,'contacts'])->name('contacts');
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
    Route::get('/addcontact',[PagesController::class,'addcontact'])->name('addcontact');
    Route::post('/addcontact',[PagesController::class,'storeContact'])->name('add.contact');
});



