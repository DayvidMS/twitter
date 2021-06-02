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

