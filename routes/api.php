<?php

use App\Http\Controllers\ApiCotroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [ApiCotroller::class, 'logout']);
    Route::get('check-login', [ApiCotroller::class, 'checkLogin']);

});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('xetras',[ApiCotroller::class,'xetrasList'])->name('xetras');
Route::get('mandals/{xetra_id?}',[ApiCotroller::class,'mandals'])->name('mandals');
Route::post('login',[ApiCotroller::class,'login'])->name('login');
Route::post('setting/save',[ApiCotroller::class,'settingSave'])->name('setting.save');
Route::post('booking/save',[ApiCotroller::class,'bookingsave'])->name('booking.save');
Route::get('setting',[ApiCotroller::class,'setting'])->name('setting');
Route::get('booking/view',[ApiCotroller::class,'bookingView'])->name('booking.view');
