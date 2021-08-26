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
Route::get('/lnormatividad/{textno}/{anio}','normatividad@index');// pagina de sugerenecias

Route::get('/ldirectorio','paginadiversa@index');// pagina de sugerenecias
Route::get('/lvisitas','paginadiversa@visitas');// pagina de sugerenecias
Route::get('/ltelefonos','paginadiversa@telefonos');// pagina de sugerenecias   
Route::get('/lfag','paginadiversa@fag');// pagina de sugerenecias 
Route::get('/lorganigrama','paginadiversa@organigrama');// pagina de sugerenecias
Route::get('/lconvocatorias','paginadiversa@convocatoria');// pagina de sugerenecias

Route::get('/datosfuncionario/{id}','paginadiversa@funcionario');//buscar funcionario en organigrama



Route::view('/link_denuncias','conte_denuncias')->name('conte_denuncias');// para denuncias y quejas PARA OCI denunca.blade.php
Route::view('/reclamaciones','libroreclamacion')->name('libroreclamacion');// libro reclamaciones



Route::get('/lpublicaciones','paginadiversa@publicaciones')->name('publicaciones');// pagina de publicaciones
Route::view('/lrevistas','revistas')->name('revistas');// pagina de revistas
Route::view('/lsugerencias','sugerencias')->name('sugerencias');// pagina de sugerenecias
Route::view('/laplicativos','remoto')->name('remoto');// pagina de sugerenecias
Route::view('/misionvision','mision')->name('mision');// pagina de sugerenecias
Route::view('/lautoridades','autoridades')->name('autoridades');// pagina de sugerenecias
Route::view('/logo','logo')->name('logo');// pagina de sugerenecias
Route::view('/ldocumentos','docugestion')->name('docugestion');// pagina de sugerenecias
Route::view('/ldireccionregional','direccionregional')->name('direccionregional');// pagina de sugerenecias
Route::view('/laportes','aportestrategia')->name('aportestrategia');// pagina de sugerenecias
Route::view('/mesapartes','mesas')->name('mesas');// pagina de sugerenecias
Route::get('/anuncios','paginadiversa@anuncios')->name('anuncios');// pagina de publicaciones

route::get('/listamenus','paginadiversa@listamenus')->name('listamenus');
route::get('/listasubmenu','paginadiversa@listasubmenu')->name('listasubmenu');
route::get('/tema','paginadiversa@tema')->name('tema');


route::get('/pagina/{id}','paginadiversa@verpagina')->name('pagina');