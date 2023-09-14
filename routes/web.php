<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\RoomController;


Route::get('/', function () {
    return view('index');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/index', function () {

    return view('index');
});

Route::get('/about', function () {

    return view('about');
});

Route::get('/contact', function () {

    return view('contact');
});

Route::get('/roomsDetails', function () {

    return view('roomsDetails');
});


Route::get('/rooms', [RoomController::class, 'index']);
Route::get('/roomsDetails', [RoomController::class, 'showDetails']);


Route::get('/about', [AboutUsController::class, 'index']);

Route::get("/offers", [OffersController::class, "index"]);

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);


require __DIR__ . '/auth.php';