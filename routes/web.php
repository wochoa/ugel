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

// Route::get('/', function () {
//     return view('inicio');
// });
// Route::view('/','inicio')->name('inicio');
Route::get('storage/notas-prensa/{file}', function ($file) {

	$rutaDeArchivo = storage_path() . '/app/public/notas-prensa/' . $file;
	//return $rutaDeArchivo;
	return response()->file($rutaDeArchivo);
});

Route::get('/','noticias@index');
Route::get('/noticias/{id}','noticias@show');
Route::get('/allnoticias','noticias@todo');// pagina de registro de pases devuelta a casa
route::get('/visitas','paginadiversa@visitas')->name('visitas');



Route::view('/link_denuncias','conte_denuncias')->name('conte_denuncias');// para denuncias y quejas PARA OCI denunca.blade.php
Route::view('/reclamaciones','libroreclamacion')->name('libroreclamacion');// libro reclamaciones




Route::view('/lsugerencias','sugerencias')->name('sugerencias');// pagina de sugerenecias


route::get('/listamenus','paginadiversa@listamenus')->name('listamenus');
route::get('/listasubmenu','paginadiversa@listasubmenu')->name('listasubmenu');
route::get('/tema','paginadiversa@tema')->name('tema');


route::get('/pagina/{id}','paginadiversa@verpagina')->name('pagina');