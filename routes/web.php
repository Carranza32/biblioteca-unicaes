<?php

use App\Http\Controllers\LibroController;
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
    return view('biblioteca');
});

Route::get('biblioteca', function () {
    return view('biblioteca');
})->name('biblioteca');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('books', LibroController::class);
    Route::get('prestamo/{id}', [LibroController::class, 'prestamo'])->name('prestamo');
    Route::get('dashboard', [LibroController::class, 'dashboard'])->name('dashboard');
    Route::get('entregar/{id}', [LibroController::class, 'entregarLibro'])->name('entregar');
});

require __DIR__.'/auth.php';
