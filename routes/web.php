<?php

use App\Http\Controllers\v1\WebController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(WebController::class)->group(function () {
    // version-1
    Route::get('/coming-soon', 'comingSoon')->name('ComingSoon');

    Route::post('/notify', 'notify')->name('comingSoon.notify');

    Route::post('/analyticData', 'analyticData')->name('analytic.Data');
});
Route::get('/hello',function(){
    return "Testing new Keyboard";
});
