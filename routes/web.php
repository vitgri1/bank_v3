<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController as CL;

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

Route::get('/', [CL::class, 'index'])->name('index');

Route::prefix('bank')->name('clients-')->group(function () {
    Route::get('/', [CL::class, 'index'])->name('index');
    Route::get('/create', [CL::class, 'create'])->name('create');
    Route::post('/create', [CL::class, 'store'])->name('store');
    Route::get('/{client}', [CL::class, 'show'])->name('show');
    Route::get('/edit/{client}', [CL::class, 'edit'])->name('edit');
    Route::put('/edit/{client}', [CL::class, 'update'])->name('update');
    Route::delete('/delete/{client}', [CL::class, 'destroy'])->name('delete');
    Route::get('/add/{client}', [CL::class, 'add'])->name('add');
    Route::put('/add/{client}', [CL::class, 'addUpdate'])->name('addUpdate');
    Route::get('/withdraw/{client}', [CL::class, 'withdraw'])->name('withdraw');
    Route::put('/withdraw/{client}', [CL::class, 'withdrawUpdate'])->name('withdrawUpdate');
});



Auth::routes();

Route::get('/home', [CL::class, 'index'])->name('home');