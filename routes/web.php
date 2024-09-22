<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth', 'web']], function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Nouvelle route pour créer une mission
    Route::get('/missions/create', [App\Http\Controllers\MissionController::class, 'create'])->name('missions.create');
    // Nouvelles routes pour modifier et mettre à jour son profil
    Route::get('/profile', [App\Http\Controllers\UserController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [App\Http\Controllers\UserController::class, 'update'])->name('profile.update');


    Route::resource('projets', App\Http\Controllers\ProjetController::class);
    Route::resource('missions', App\Http\Controllers\MissionController::class);
});
