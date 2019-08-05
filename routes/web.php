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

Route::get('/', 'SiteController@index');

Route::get('/noticias', 'SiteController@noticia')->name('noticia.listar');
Route::get('/noticias/{id}/{titulo?}', 'SiteController@noticiaMostrar')->name('noticia.show');

Route::get('/eventos', 'SiteController@evento')->name('evento.listar');
Route::get('/eventos/{id}/{titulo?}', 'SiteController@eventoMostrar')->name('evento.show');

Route::get('/artigos', 'SiteController@evento')->name('artigo.listar');
Route::get('/artigos/{id}/{titulo?}', 'SiteController@artigoMostrar')->name('artigo.show');

Route::post('inscrever', 'SiteController@inscrever');

Route::resource('admin/artigo', 'ArtigoController', ['except' => ['show']]);
Route::resource('admin/noticia', 'NoticiaController', ['except' => ['show']]);
Route::resource('admin/evento', 'EventoController', ['except' => ['show']]);

Auth::routes();

Route::get('admin/home', 'HomeController@index')->name('home');

Route::redirect('admin', 'admin/home', 301);