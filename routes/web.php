<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\InvitacionController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\ProfileController;
use App\Models\Invitacion;
use App\Models\Servicio;
use App\Models\usuario;
use Illuminate\Support\Facades\Route;

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
Route::resource('cliente', ClienteController::class);
Route::get('/', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

  //  Route::resource('cliente', ClienteController::class);
    Route::resource('servicio', ServicioController::class);
    Route::resource('invitacion', InvitacionController::class);
});

require __DIR__.'/auth.php';
