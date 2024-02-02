<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    //ROTAS DE VISUALIZAÇÃO
    //ADICIONAR
    Route::get('/adicionar',function(){
        return view('adicionar');
    })->name('adicionar');
    //EXCLUIR
    Route::get('/excluir/{id}',function(){
        return view('excluir');
    })->name('excluir');
    //EDITAR
    Route::get('/editar/{id}',function(){
        return view('editar');
    })->name('editar');
    //ROTAS DE OPERAÇÕES
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
