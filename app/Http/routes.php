<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Autenticación
Route::get('ingresar', 'Auth\AuthController@getLogin');
Route::post('ingresar', 'Auth\AuthController@postLogin');
Route::get('salir', 'Auth\AuthController@getLogout');
Route::get('registro', 'Auth\AuthController@getRegister');

// Atencion y Consulta
Route::get('registrarProtocolo', 'ProtocoloController@getRegister');
Route::get('registrarEmpresa', 'EmpresaController@getRegister');
Route::post('asignarEmpresa', 'EmpresaController@postAsignar');
Route::post('asignarProtocolo', 'ProtocoloController@postAsignar');
Route::get('registrar/examenes', 'ProtocoloController@getExamenes');
Route::post('asignar/examenes/paciente', 'ProtocoloController@asignarExamenes');

// Autenticado
Route::get('panel', 'HomeController@getPanel');

// Relacionados al perfil de trabajador
Route::get('perfil-trabajador', 'WorkerProfileController@getIndex');
Route::get('perfil-trabajador/ver', 'WorkerProfileController@getPrevisualizar');
Route::post('registrar/skill', 'WorkerProfileController@postSkill');
Route::put('modificar/skill', 'WorkerProfileController@putSkill');
Route::post('eliminar/skill', 'WorkerProfileController@deleteSkill');

// Relacionadas al MOF
Route::get('MOF', 'MOFController@getIndex');
Route::get('MOF/cargos', 'MOFController@getCargos');
Route::get('MOF/cargos/{id}', 'MOFController@getEditarCargo');

// Relacionadas a la Hoja de Ruta
Route::get('HojaRuta/registrar', 'HojaRutaController@getHojaRuta');

// Relacionadas al triaje
Route::get('Triaje/registrar', 'TriajeController@getTriaje');
Route::post('listar/pacientes', 'TriajeController@postPacientes');

// Relacionadas al Historial
Route::get('Historial/registrar', 'HistorialClinicoController@getHistorial');
