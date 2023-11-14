<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('hidrobolivar');



Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/pagos', function () {
    return view('pagos.pago');
})->name('pagos');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
});

Route::resource('users',UserController::class)->only(['index','edit','update'])->names('admin.users');

Route::resource('noticias',NoticiaController::class)->names('noticias');

//ruta roles
Route::resource('role',RoleController::class)->names('admin.role');

require __DIR__.'/auth.php';
