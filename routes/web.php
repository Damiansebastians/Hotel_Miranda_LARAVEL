<?php


use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OffersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/rooms', [RoomController::class, 'index']);
Route::get('/rooms/{id}', [RoomsController::class, 'showDetails']);

Route::get('/aboutUs', [AboutUsController::class, 'showAbout']);

Route::get("/offers", [OffersController::class, "showOffers"]);

Route::get('/contact',[ContactController::class, 'showContact']);