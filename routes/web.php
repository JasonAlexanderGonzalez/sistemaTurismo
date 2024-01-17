<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

    
// Route::get("/Registro", "App\Http\Controllers\ControladorUsuarios@obtenerUsuarios" );

Route::post('/register', [RegisterController::class, 'create'])->name('register');
Route::view('/registros', 'auth.register')->name('registros');

Route::post('/login', [LoginController::class, 'store'])->name('logear');
Route::view('/', 'auth.login')->name('login');//se carga la vista de login 


Route::middleware('auth')
->group(function () {
    Route::view('/home', 'home')->name('Home');
    Route::get('/logout',[LoginController::class, 'destroy'])->name('logout');

});

   
    // Route::get("/usuarios", function () {
    //     return "Todos los usuarios";    
    // });
    