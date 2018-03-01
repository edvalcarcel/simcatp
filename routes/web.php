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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource("Ajustes","AjustesController");
Route::resource("Simulador","SimuladorController");
Route::get("Simulador/inicio/home_admin/{fecha_cargue}/{horno}","SimuladorController@inicio");
Route::resource("Admin","AdminController");

Route::post("Simulador/obtener_items","SimuladorController@obtener_items")->name("obtener_items");

Route::post("Simulador/Registrar_movimiento","SimuladorController@Registrar_movimiento")->name("Registrar_movimiento");
Route::post("Simulador/Update_movimiento","SimuladorController@Update_movimiento")->name("Update_movimiento");
Route::post("Simulador/Delete_movimiento","SimuladorController@Delete_movimiento")->name("Delete_movimiento");

Route::post("Simulador/Registrar_totales","SimuladorController@Registrar_totales")->name("Registrar_totales");
Route::get("Simulador/{seccion}/home/{limite}/fecha/{fecha}/horno/{horno}/mov/{movimiento}","SimuladorController@index")->name("Simulador_home");
Route::resource("Graficas","GraficasController");
Route::post("Simulador/autocomplete","SimuladorController@autocomplete_productos")->name("autocomplete_productos");
Route::post("Simulador/cargar_productos","SimuladorController@Cargar_productos")->name("cargar_productos");
Route::post("Simulador/cargando","SimuladorController@Cargando")->name("Cargando");
Route::post("Simulador/Graficar","SimuladorController@Graficar")->name("Graficar");

Route::post("Simulador/Graficar_delete","SimuladorController@Graficar_delete")->name("Graficar_delete");

Route::post("Simulador/Registrar","SimuladorController@Registrar")->name("Registrar");
Route::get('Graficas/{id_registro}/graficar/{pagina?}', "GraficasController@index2")->name("Mostra_graficas");
