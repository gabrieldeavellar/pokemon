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
Route::get('pokemons/{id}', 'App\Http\Controllers\PokemonController@show')->name('pokemons.show');


Route::get('pokemons', 'App\Http\Controllers\PokemonController@index')->name('pokemons.index');

Route::get('/', function () {
    return view('welcome');
});
