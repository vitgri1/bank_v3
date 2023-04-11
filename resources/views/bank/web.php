<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PirmasController;
use App\Http\Controllers\CalcController as C;
use App\Http\Controllers\ClientController as CL;

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

Route::get('/labas', fn() => '<h1 style="color:crimson;">LABAS</h1>');

Route::get('calc', [C::class, 'show'])->name('show');
Route::post('calc', [C::class, 'doCalc'])->name('do-calc');


Route::prefix('bank')->name('clients-')->group(function () {
    Route::get('/', [CL::class, 'index'])->name('index');
    Route::get('/create', [CL::class, 'create'])->name('create');
    Route::post('/create', [CL::class, 'store'])->name('store');
    Route::get('/{client}', [CL::class, 'show'])->name('show');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');