<?php

use App\Http\Controllers\AuthController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\LivroController;

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

Use Illuminate\Http\Request;

// EXERCICIO CRUD LIVROS

Route::get('/create', [LivroController::class,'create']);

Route::post('/create', [LivroController::class,'store']);




# ROTA QuE O LARAVEL DEU
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard/{usuario}', [UserController::class,'dashboard']);

Route::get('/dashboard/{usuario}', function (String $usuario){
    return view ('dashboard', [
        'usuario'=>$usuario
    ]);
} );

Route::get('/login', [AuthController::class,'create']);

Route::post('/login', [AuthController::class,'store']);


// Route::view('/', 'welcome');

// //Rota de get recebe um caminho e uma função
// Route::get('/login', function () {
//     return view('login');
// })->name('login');  

// Route::get('/perfil/{nome}', function(String nome){
//     return "<h1>Nome: $nome</h1>";
// });
