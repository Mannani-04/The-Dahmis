<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DahmisController; 
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/dah', [DahmisController::class, 'page']);
Route::get('/get-images', [DahmisController::class, 'getImages']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
