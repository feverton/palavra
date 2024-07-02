<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\VersiculoController;

Route::get('/',function(){
  return '<h1>Teste</h1>';
});

Route::prefix('palavra')->group(function() {
  Route::get('/categorias',[LivroController::class,'categorias']);
  Route::get('/capitulos/{abreviatura}',[LivroController::class,'capitulos']);
  Route::get('/{traducao}/{livro}/{capitulo}',[VersiculoController::class,'versiculos']);
  Route::get('/{testamento?}',[LivroController::class,'mostra']);
});
