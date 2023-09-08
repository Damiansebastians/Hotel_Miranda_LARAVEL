<?php


use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OffersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;


Route::get('/', function () {
    return view('index');
});

Route::get('/rooms', [RoomController::class, 'index']);
Route::get('/rooms/{id}', [RoomsController::class, 'showDetails']);

Route::get('/aboutUs', [AboutUsController::class, 'index']);

Route::get("/offers", [OffersController::class, "index"]);

Route::get('/contact',[ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);