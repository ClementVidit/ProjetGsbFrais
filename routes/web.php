<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/formLogin', 'App\Http\Controllers\VisiteurController@getLogin');

Route::post('/Login', 'App\Http\Controllers\VisiteurController@signIn');

Route::get('/getLogin', 'App\Http\Controllers\VisiteurController@signOut');

Route::get('/listeFrais', 'App\Http\Controllers\FraisController@getFraisVisiteur');

Route::get('/modifierFrais', 'App\Http\Controllers\FraisController@getModifierFrais');

Route::post('/validerFrais/{id}', 'App\Http\Controllers\FraisController@validerFrais');
