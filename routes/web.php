<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

use App\Http\Controllers\InicioController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\FooterController;

route::get('/',[InicioController::class,'index']);
route::get('/nosotros',[NosotrosController::class,'nosotros']);
route::get('/servicios',[ServiciosController::class,'servicios']);
route::get('/productos',[ProductosController::class,'productos']);
route::get('/navbar',[NavbarController::class,'navbar']);
route::get('/footer',[FooterController::class,'footer']);