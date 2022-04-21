<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
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

//admin
Route::get('/admin',[AdminController::class,'index']);
Route::get('/dashboard',[AdminController::class,'show_dashboard'])->name('dashboard');
Route::post('/admin',[AdminController::class,'dashboard'])->name('login_dashboard');
Route::get('/logout',[AdminController::class,'logout'])->name('logout_dashboard');
//events
Route::get('/add-event',[EventController::class,'add_event']);

Route::get('/edit-event/{id}',[EventController::class,'edit_event']);
Route::post('/update-event/{id}',[EventController::class,'update_event']);

Route::post('/save-event',[EventController::class,'save_event'])->name('save-event');
Route::get('/all-event',[EventController::class,'all_event']);
Route::get('/delete-event/{id}',[EventController::class,'delete_event']);



Route::get('/', function () {
    return view('index');
});

Route::get('/event', [EventController::class,'index']);
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/event-detail',[EventController::class,'show_event']);

// Route::get('/', function () {
//     return view('welcome');
// });
