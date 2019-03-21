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
use App\Mail\Welcome;
use App\Mail\NewContact;

Route::get('email', function(){
	return new NewContact;
});


//Login y Register
Auth::routes();

//Web
Route::get('/', 'Web\PageController@index')->name('home');

Route::get('/aviso-de-privacidad', 'Web\PageController@aviso')->name('aviso');
Route::get('/entradas', 'Web\PageController@blog')->name('posts');
Route::get('/entradas/{slug}', 'Web\PageController@post')->name('post');
Route::get('/categoria/{slug}', 'Web\PageController@category')->name('category');
Route::get('/etiqueta/{slug}', 'Web\PageController@tag')->name('tag');
Route::get('/llantas/camion', 'Web\PageController@camion')->name('tires.camion');
Route::get('/llantas/agricola', 'Web\PageController@agricola')->name('tires.agricola');

Route::get('/admin', 'Admin\DashboardController@index')->name('admin');
Route::resource('messages', 'Admin\MessagesController');
Route::resource('categories', 'Admin\CategoriesController');
Route::resource('tags', 'Admin\TagsController');
Route::resource('posts', 'Admin\PostsController');
Route::resource('tires', 'Admin\TiresController');
