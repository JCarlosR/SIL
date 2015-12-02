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
Route::get('orden/verificar', 'ProtocoloController@getOrdenes');
Route::post('orden/verificar', 'ProtocoloController@getOrdenesEmpresa');
Route::get('orden/verificar/{id}', 'ProtocoloController@getOrdenesProtocolo');
Route::get('orden/ver/{id}', 'ProtocoloController@getPrevisualizar');


// Relacionadas al perfil de trabajador
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
Route::post('MOF/cargo/registrar', 'MOFController@postCargo');
Route::get('MOF/cargos/{id}', 'MOFController@getEditarCargo');
Route::put('MOF/cargos/{id}', 'MOFController@putEditarCargo');

// Relacionadas a datos particulares de los cargos
Route::post('cargos/relaciones/registrar', 'RelacionController@store');
Route::put('cargos/relaciones/modificar', 'RelacionController@update');
Route::post('cargos/relaciones/eliminar', 'RelacionController@destroy');
Route::post('cargos/atribuciones/registrar', 'AtribucionController@store');
Route::put('cargos/atribuciones/modificar', 'AtribucionController@update');
Route::post('cargos/atribuciones/eliminar', 'AtribucionController@destroy');
Route::post('cargos/funciones/registrar', 'FuncionController@store');
Route::put('cargos/funciones/modificar', 'FuncionController@update');
Route::post('cargos/funciones/eliminar', 'FuncionController@destroy');
Route::post('cargos/requisitos/registrar', 'RequisitoController@store');
Route::put('cargos/requisitos/modificar', 'RequisitoController@update');
Route::post('cargos/requisitos/eliminar', 'RequisitoController@destroy');


// Relacionadas a la hoja de ruta
Route::get('hojaruta/registrar/{orden_id}/{paciente_id}', 'HojaRutaController@getHojaRuta');

// Relacionadas al triaje
Route::get('triaje/registrar', 'TriajeController@getTriaje');
Route::post('triaje/registrar', 'TriajeController@postRegistrar');
Route::get('pacientes/listar', 'TriajeController@getPacientes');

// Relacionadas al historial
Route::get('historial/registrar/{triaje_id}', 'HistorialClinicoController@getHistorial');

// Relacionadas a psicología
Route::get('psicologia', 'PsicologiaController@getIngreso');

//Relacionadas con laboratorio
Route::get('LaboratorioHDR', 'LaboratorioController@getIndex');
Route::get('LaboratorioHC', 'LaboratorioController@getHC');

//Relacionadas con consultoria
Route::get('consultoria', 'ConsultoriaController@getIndex');
Route::get('consultoriaHC', 'ConsultoriaController@getHCl');

//Relacionadas con radiologia
Route::get('radiologia', 'RadiologiaController@getIndex');
Route::get('radiologiHC', 'RadiologiaController@getHR');

