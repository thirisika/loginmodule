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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Display Index Page
Route::get('/',[App\Http\Controllers\ContactController::class,'index']);
//Display Create New Contact
Route::get('/create',[App\Http\Controllers\ContactController::class,'create']);
//Save new contact
Route::post('/store',[App\Http\Controllers\ContactController::class,'store']);
// Display edit contact page
Route::get('/edit/{id}',[App\Http\Controllers\ContactController::class,'edit'])->name('edit');
//Update existing contacts by id
Route::patch('/update/{id}',[App\Http\Controllers\ContactController::class,'update'])->name('update');
// Delete unwanted contact
Route::delete('/delete/{id}',[App\Http\Controllers\ContactController::class,'destroy'])->name('delete');
