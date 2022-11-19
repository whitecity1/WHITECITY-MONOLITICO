<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SesionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LugarTuristicoController;
use App\Http\Controllers\RutaTuristicaController;
use App\Http\Controllers\RecomendadoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\FotografiaController;
use App\Http\Controllers\RutasaccesoController;
use App\Http\Controllers\QuienesomosController;
use App\Http\Controllers\RestauranteController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\CentrocomercialController;
use App\Http\Controllers\EstacionservicioController;
use App\Http\Controllers\AutoridadsController;
use App\Http\Controllers\PuntosatencionController;



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

Route::get('/', function () {
    return view('home');
});


Route::get('register',  [RegisterController::class,'create'])
->middleware('guest')
->name('register.index');
Route::post('register',  [RegisterController::class,'store'])
->name('register.store');

Route::get('login', [SesionsController::class, 'create'])
->middleware('guest')
->name('login.index');

Route::post('login', [SesionsController::class, 'store'])->name('login.store');
Route::get('logout', [SesionsController::class, 'destroy'])
->middleware('auth')
->name('login.destroy');


Route::get('/admin', [AdminController::class, 'index'])
->middleware('auth.admin')
->name('admin.index'); 


//RUTAS PARA LOS CRUDs
Route::resource('/users', 'App\Http\Controllers\UserController');

Route::resource('/rutasacceso', 'App\Http\Controllers\RutasaccesoController');

Route::resource('/tiposervicios', 'App\Http\Controllers\TiposervicioController');

Route::resource('/tipopersonas', 'App\Http\Controllers\TipopersonaController');

Route::resource('/rutasturisticas', 'App\Http\Controllers\RutaturisticaController');

Route::resource('/eventos', 'App\Http\Controllers\EventoController');

Route::resource('/recomendados', 'App\Http\Controllers\RecomendadoController');

Route::resource('/fotografias', 'App\Http\Controllers\FotografiaController');

Route::resource('/tipoconvenio', 'App\Http\Controllers\TipoconvenioController');

Route::resource('/convenios', 'App\Http\Controllers\ConvenioController');

Route::resource('/lugaresturisticos', 'App\Http\Controllers\LugarturisticoController');

Route::resource('/autoridades', 'App\Http\Controllers\AutoridadsController');

Route::resource('/restaurantes', 'App\Http\Controllers\RestauranteController');

Route::resource('/hoteles', 'App\Http\Controllers\HotelController');

Route::resource('/puntosatencion', 'App\Http\Controllers\PuntosatencionController');

Route::resource('/centroscomerciales', 'App\Http\Controllers\CentrocomercialController');

Route::resource('/estacioneservicio', 'App\Http\Controllers\EstacionservicioController');







//RUTAS PARA EL NAVBAR
Route::get('listarlugares', [LugarturisticoController::class,'listarlugares']);

Route::get('listarutasturisticas', [RutaturisticaController::class,'listarutasturisticas']);

Route::get('listarecomendados', [RecomendadoController::class,'listarecomendados']);

Route::get('listareventos', [EventoController::class,'listareventos']);

Route::get('listarservicios', [ServicioController::class,'listarservicios']);

Route::get('listarfotografias', [FotografiaController::class,'listarfotografias']);

Route::get('listarutasacceso', [RutasaccesoController::class,'listarutasacceso']);

Route::get('listarautoridades', [AutoridadsController::class,'listarautoridades']);

Route::get('listarestaurantes', [RestauranteController::class,'listarestaurantes']);

Route::get('listarhoteles', [HotelController::class,'listarhoteles']);

Route::get('listarestacioneservicio', [EstacionservicioController::class,'listarestacioneservicio']);

Route::get('listarcentroscomerciales', [CentrocomercialController::class,'listarcentroscomerciales']);

Route::get('listarpuntosatencion', [PuntosatencionController::class,'listarpuntosatencion']);

Route::get('listarusers', [UserController::class,'listarusers']);

Route::get('/quienesomos', function(){
    return view('quienesomos.index'); 
});

Route::get('/parquecaldas', function(){
    return view('parquecaldas.index'); 
});

Route::get('/museos', function(){
    return view('museos.index'); 
});


//Descargas PDF
 Route::get('fotografias-pdf', 'App\Http\Controllers\FotografiaController@generar_pdf')->name('fotografias-pdf');

Route::get('restaurantes-pdf', 'App\Http\Controllers\RestauranteController@generar_pdf')->name('restaurantes-pdf');

Route::get('holetes-pdf', 'App\Http\Controllers\HotelController@generar_pdf')->name('hoteles-pdf');

// Route::get('download-pdf', 'App\Http\Controllers\ConvenioController@generar_pdf')->name('descargar-pdf');

Route::get('eventos_pdf', 'App\Http\Controllers\EventoController@generar_pdf')->name('eventos_pdf');

Route::get('estacioneservicio-pdf', 'App\Http\Controllers\EstacionservicioController@generar_pdf')->name('estacioneservicio-pdf');

Route::get('rutasacceso-pdf', 'App\Http\Controllers\RutasaccesoController@generar_pdf')->name('rutasacceso-pdf');

Route::get('rutasturisticas-pdf', 'App\Http\Controllers\RutaturisticaController@generar_pdf')->name('rutasturisticas-pdf');

Route::get('centroscomerciales-pdf', 'App\Http\Controllers\CentrocomercialController@generar_pdf')->name('centroscomerciales-pdf');

Route::get('autoridades-pdf', 'App\Http\Controllers\AutoridadsController@generar_pdf')->name('autoridades-pdf');

Route::get('puntosatencion-pdf', 'App\Http\Controllers\PuntosatencionController@generar_pdf')->name('puntosatencion-pdf');

Route::get('users-pdf', 'App\Http\Controllers\UserController@generar_pdf')->name('users-pdf');

Route::get('convenios-pdf', 'App\Http\Controllers\ConvenioController@generar_pdf')->name('convenios-pdf');

Route::get('/lugares', function(){
    return view('lugares.pueblito'); 
});

//Rutas para detalles de lugares
Route::get('detalleslugares', [LugarturisticoController::class,'detalleslugares']);