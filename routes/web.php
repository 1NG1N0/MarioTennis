<?php

use App\Http\Controllers\inscricaoController;
use App\Http\Controllers\siteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/regras', [SiteController::class, 'regras'])->name('site.regras');
Route::get('/inscricao', [SiteController::class, 'inscricao'])->name('site.login');
Route::get('/registro', [SiteController::class, 'registro'])->name('site.registro');
Route::post('/registro/login', [UserController::class, 'login'])->name('registro.login');
Route::post('/registro/registrar', [UserController::class, 'store'])->name('registro.registro');
Route::get('/personagens', [SiteController::class, 'personagens'])->name('site.personagens');
Route::get('/personagens/{nomepersonagem}/{personagemID}', [SiteController::class, 'personagemShow'])->name('site.personagem');

Route::post('/inscrever/{userID}', [inscricaoController::class, 'inscrever'])->name('site.inscrever');
Route::get('/torneio/inscricao', [inscricaoController::class, 'index'])->name('torneio.inscricao');




