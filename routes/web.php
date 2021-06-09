<?php

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
use App\Http\Controllers\TwitterController;

//chama a tela de login
Route::get('/', function (){
    return view('auth.login');
});
//chama a função para salvar o twitter do usuario no banco de dados
Route::post('/twittar', [TwitterController::class,'store']);
//verifica se está registrado e logado e envia para página principal
Route::get('/dashboard', [TwitterController::class,'index'])->middleware('auth');
//Retorna a página de twitter do usuario selecionado e mostra apenas os twitters do usuario
Route::get('/usuario/{id}',[TwitterController::class,'show']);
//Faz a ação para comentario.
Route::post('/twittar/comentario',[TwitterController::class,'salvaComentario']);
//faz a ação para seguir um usuario, feito com o ajax
Route::post('/seguir',[TwitterController::class,'seguir'])->middleware('auth');
//Ação para dar Ufollow no usuario selecionado, requisição com AJAX
Route::delete('/ufollow',[TwitterController::class,'ufollow'])->middleware('auth');
