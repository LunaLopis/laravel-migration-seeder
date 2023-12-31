<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Trainscontroller as Trainscontroller;
use App\Http\Controllers\CompaniesController as Companiescontroller;

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
Route::get('/', [Trainscontroller::class, 'index']);
Route::get('/AllTrains', [Trainscontroller::class, 'allTrains'])->name('allTrains');
Route::get('/aziende', [CompaniesController::class, 'index'])->name('companies');
// Route::get('/', function () {
//     return view('home');
// });
