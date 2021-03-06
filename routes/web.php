<?php

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

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));

Route::resource ('shop', 'ShopController', [
    'only' => ['index','edit', 'update', 'destroy', 'show']
]);

Route::resource ('skate', 'SkateController', [
    'only' => ['index','edit', 'update', 'show', 'create', 'store', 'destroy']
]);

//Route::resource ('tool', 'ToolController', [
//    'only' => ['index','edit', 'update', 'show', 'create', 'store', 'destroy', 'all']
//]);


Route::get("/tool", "ToolController@index")->name('tool.index');
Route::get("/tool/{id}", "ToolController@all")->name('tool.all');




Auth::routes();

Route::get('/home', 'ShopController@accueil')->name('home');
