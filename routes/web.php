<?php
use App\Http\Controllers\siteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/regras', [SiteController::class, 'regras'])->name('site.regras');
Route::get('/inscricao', [SiteController::class, 'inscricao'])->name('site.login');
Route::get('/registro', [SiteController::class, 'registro'])->name('site.registro');
Route::get('/registro/login', [UserController::class, 'login'])->name('registro.login');
Route::get('/registro/registrar', [UserController::class, 'store'])->name('registro.registro');


