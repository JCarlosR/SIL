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
    return redirect('panel');
});

// Autenticación
Route::get('ingresar', 'Auth\AuthController@getLogin');
Route::post('ingresar', 'Auth\AuthController@postLogin');
Route::get('salir', 'Auth\AuthController@getLogout');
Route::get('registro', 'Auth\AuthController@getRegister');

// Usuario autenticado
Route::get('panel', 'HomeController@getPanel');

// Atención y consulta
Route::get('protocolo/registrar', 'ProtocoloController@getRegister');
Route::get('empresa/registrar', 'EmpresaController@getRegister');
Route::post('empresa/registrar', 'EmpresaController@postRegister');
Route::post('protocolo/registrar', 'ProtocoloController@postRegister');
Route::get('registrar/examenes', 'ProtocoloController@getExamenes');
Route::post('asignar/examenes/paciente', 'ProtocoloController@asignarExamenes');

// Relacionados al perfil de trabajador
Route::get('perfil-trabajador', 'WorkerProfileController@getIndex');
Route::get('perfil-trabajador/ver', 'WorkerProfileController@getPrevisualizar');
Route::post('registrar/skill', 'WorkerProfileController@postSkill');
Route::put('modificar/skill', 'WorkerProfileController@putSkill');
Route::post('eliminar/skill', 'WorkerProfileController@deleteSkill');

// Relacionadas al MOF
Route::get('MOF', 'MOFController@getMOF');
Route::post('MOF', 'MOFController@postMOF');
Route::get('organigrama', 'MOFController@getOrganigrama');
Route::get('MOF/cargos', 'MOFController@getCargos');
Route::get('MOF/cargos/{id}', 'MOFController@getEditarCargo');

// Relacionadas a la hoja de Ruta
Route::get('hojaruta/registrar', 'HojaRutaController@getHojaRuta');

// Relacionadas al triaje
Route::get('triaje/registrar', 'TriajeController@getTriaje');
Route::post('triaje/registrar', 'TriajeController@postRegistrar');
Route::get('pacientes/listar', 'TriajeController@getPacientes');

// Relacionadas al historial
Route::get('historial/registrar/{triaje_id}', 'HistorialClinicoController@getHistorial');

// Relacionadas a psicología
Route::get('psicologia', 'PsicologiaController@getIngreso');
