<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('index');
});


Route::get('/user', [UserController::class,'index']);
//Route::get('/pesquisar', [UserController::class,'search']);
Route::post('/user', [UserController::class,'pesquisarNome']);

Route::get('/resultadoPesquisa', [UserController::class,'pesquisarNome']);

Route::get('/user/{id}', [UserController::class, 'show']);

Route::post('/',[UserController::class,'create']);

Route::put('/user/{id}', [UserController::class,'update']);

Route::delete('/user/{id}',[UserController::class,'delete']);