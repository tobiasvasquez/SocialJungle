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
Route::get('/', function(){
  return view('inicio');
});

//Ruta para configuracion

Route::get('configuracion', 'UserController@config')->middleware('auth')->middleware(['auth','password.confirm']);

Route::post('configuracion/update','UserController@update')->name('config.update')->middleware(['auth','password.confirm']);

//Rutas Perfil
Route::get('/perfil', 'PostController@userPosts', function(){
  return view('perfil');
})->middleware('auth');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Ruta que tiene que ver con los temas
    Route::get('/temasreg', 'TemasController@index')->middleware('auth');
    Route::get('/temas/{id}', 'TemasController@show');
//Rutas de Posteo
    Route::get('/post', 'PostController@index')->name('post')->middleware('auth');
   
    
    Route::post('/guardarPost', 'PostController@save')->middleware('auth');
    
    Route::get('/publicacion/{id}','PostController@show')->middleware('auth');
    
    Route::get('/eliminarPost/{id}', 'PostController@delete')->middleware('auth');

    Route::get('/notificaciones ', function () {
    return view('notificaciones');
})-> middleware('auth');


//Ruta que tiene que ver con los temas
Route::get('/temasreg', 'TemasController@index')->middleware('auth');

Route::get('/post', 'PostController@index')->name('post')->middleware('auth');

Route::post('/guardarPost', 'PostController@save');

Route::get('/publicacion/{id}','PostController@show')->middleware('auth');

Route::get('/temas/{id}', 'TemasController@show', function () {
  //return view('TemasController@temas');
  return view(dd($id));
 });
