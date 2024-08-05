<?php
use App\Http\Controllers\SaludoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', [SaludoController::class, 'saludito']);

Route::resource('/cursos', CursoController::class);


Route::put('/cursos/{id}', 'CursoController@update')->name('cursos.update');
