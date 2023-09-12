<?php

use Illuminate\Support\Facades\Route;

//models
use App\Models\Train;

//controllers
use App\Http\Controllers\Guest\TrainController; 

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
    return view('homePage');
});

Route::get('/trains/{id}', [TrainController::class,'show'])->name('trains.show');

Route::get('/trains', [TrainController::class,'index'])->name('trains.index');

// Route::get('/trains', function () {
//     $trains = Train::all();
//     dd($trains);
//     return view('trains');
// });

