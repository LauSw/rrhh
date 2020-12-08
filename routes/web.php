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
    return view('contenido/contenido');
});
//Empleado
Route::get('/empleado', 'EmpleadoController@index');
Route::post('/empleado/registrar', 'EmpleadoController@store');
Route::put('/empleado/actualizar', 'EmpleadoController@update');
Route::put('/empleado/desactivar', 'EmpleadoController@desactivar');
Route::put('/empleado/activar', 'EmpleadoController@activar');
Route::get('/empleado/selectEmpleado', 'EmpleadoController@selectEmpleado');
Route::get('/empleado/findCompetencias', 'EmpleadoController@findCompetencias');

//Contrato
Route::get('/contrato', 'ContratoController@index');
Route::post('/contrato/registrar', 'ContratoController@store');
Route::put('/contrato/actualizar', 'ContratoController@update');
Route::put('/contrato/desactivar', 'ContratoController@desactivar');
Route::put('/contrato/activar', 'ContratoController@activar');
Route::get('/contrato/selectContrato', 'ContratoController@selectContrato');

//Empresa
Route::get('/empresa', 'EmpresaController@index');
Route::post('/empresa/registrar', 'EmpresaController@store');
Route::put('/empresa/actualizar', 'EmpresaController@update');
Route::put('/empresa/desactivar', 'EmpresaController@desactivar');
Route::put('/empresa/activar', 'EmpresaController@activar');
Route::get('/empresa/selectEmpresa', 'EmpresaController@selectEmpresa');

//Area
Route::get('/area', 'AreaController@index');
Route::post('/area/registrar', 'AreaController@store');
Route::put('/area/actualizar', 'AreaController@update');
Route::put('/area/desactivar', 'AreaController@desactivar');
Route::put('/area/activar', 'AreaController@activar');
Route::get('/area/selectArea', 'AreaController@selectArea');

//Puesto
Route::get('/puesto', 'PuestoController@index');
Route::post('/puesto/registrar', 'PuestoController@store');
Route::put('/puesto/actualizar', 'PuestoController@update');
Route::put('/puesto/desactivar', 'PuestoController@desactivar');
Route::put('/puesto/activar', 'PuestoController@activar');
Route::get('/puesto/selectPuesto', 'PuestoController@selectPuesto');

//Incidencia
Route::get('/incidencia', 'IncidenciaController@index');
Route::post('/incidencia/registrar', 'IncidenciaController@store');
Route::put('/incidencia/actualizar', 'IncidenciaController@update');
Route::put('/incidencia/desactivar', 'IncidenciaController@desactivar');
Route::put('/incidencia/activar', 'IncidenciaController@activar');
Route::get('/incidencia/selectIncidencia', 'IncidenciaController@selectIncidencia');

//Evento
Route::get('/evento', 'EventoController@index');
Route::post('/evento/registrar', 'EventoController@store');
Route::put('/evento/actualizar', 'EventoController@update');
Route::put('/evento/desactivar', 'EventoController@desactivar');
Route::put('/evento/activar', 'EventoController@activar');

//Departamento
Route::get('/departamento', 'DepartamentoController@index');
Route::post('/departamento/registrar', 'DepartamentoController@store');
Route::put('/departamento/actualizar', 'DepartamentoController@update');
Route::put('/departamento/desactivar', 'DepartamentoController@desactivar');
Route::put('/departamento/activar', 'DepartamentoController@activar');
Route::get('/departamento/selectDepartamento', 'DepartamentoController@selectDepartamento');

//Departamento
Route::get('/competencia', 'CompetenciaController@index');
Route::post('/competencia/registrar', 'CompetenciaController@store');
Route::put('/competencia/actualizar', 'CompetenciaController@update');
Route::put('/competencia/desactivar', 'CompetenciaController@desactivar');
Route::put('/competencia/activar', 'CompetenciaController@activar');
Route::get('/competencia/selectCompetencia', 'CompetenciaController@selectCompetencia');

