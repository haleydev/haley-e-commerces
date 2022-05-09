<?php
// use App\Http\Controllers\HaleyController;

use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::get('/haley.txt', function () {
    echo route('users.store');
    dd(url('/'));
});

// lista usuarios
Route::get('/users',[UserController::class,'list'])->name('users.list');

// edita usuarios
Route::get('/users/{id}/edit',[UserController::class,'edit'])->name('users.edit');

// deleta usuario
Route::delete('/users/{id}',[UserController::class,'delete'])->name('users.delete');

// atualiza dados
Route::put('/users/{id}',[UserController::class,'update'])->name('users.update');

// cria usuarios
Route::get('/users/create',[UserController::class,'create'])->name('users.create');
Route::post('/users/create',[UserController::class,'store'])->name('users.store');

// detalhes do usuarios
Route::get('/users/{id}',[UserController::class,'details'])->name('users.details');

//comentarios
Route::get('/users/{id}/comments',[CommentController::class,'index'])->name('users.comments');

//novo comentario
Route::get('/users/{id}/comments/create',[CommentController::class,'create'])->name('create.comments');
Route::post('/users/{id}/comments/create',[CommentController::class,'store'])->name('comments.store');

Route::get('/haley',[HaleyController::class,'render'])->name('haley.init');

