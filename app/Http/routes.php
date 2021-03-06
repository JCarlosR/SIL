<?php

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
Route::get('protocolo/{id}/estado/{estado}', 'ProtocoloController@postEstado');
Route::get('registrar/examenes', 'ProtocoloController@getExamenes');
Route::post('asignar/examenes/paciente', 'ProtocoloController@asignarExamenes');
Route::get('orden/verificar', 'ProtocoloController@getOrdenes');
Route::post('orden/verificar', 'ProtocoloController@getOrdenesEmpresa');
Route::get('orden/verificar/{id}', 'ProtocoloController@getOrdenesProtocolo');
Route::get('orden/ver/{id}', 'ProtocoloController@getPrevisualizar');

// Gestión de quejas
Route::get('queja/registrar', 'QuejaController@getRegister');
Route::post('queja/registrar', 'QuejaController@postRegister');
Route::get('quejas', 'HomeController@getQuejas');
Route::get('queja/{id}/estado/{estado}', 'QuejaController@postEstado');

// Relacionadas al perfil de trabajador
Route::get('perfil-trabajador', 'WorkerProfileController@getIndex');
Route::get('perfil-trabajador/ver/pdf', 'WorkerProfileController@getPDF');
Route::get('perfil-trabajador/ver/html', 'WorkerProfileController@getHTML');
Route::post('registrar/skill', 'WorkerProfileController@postSkill');
Route::put('modificar/skill', 'WorkerProfileController@putSkill');
Route::post('eliminar/skill', 'WorkerProfileController@deleteSkill');

// Relacionadas al MOF
Route::get('MOF', 'MOFController@getMOF');
Route::post('MOF', 'MOFController@postMOF');
Route::get('organigrama', 'MOFController@getOrganigrama');
Route::get('MOF/ver/pdf', 'MOFController@getPDF');
Route::get('MOF/ver/html', 'MOFController@getHTML');
Route::get('MOF/ver/imagen/{imagen}', 'MOFController@getImagen');

// Relacionadas a los cargos del MOF
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
Route::get('hojaruta/visualizar/{orden_id}/{paciente_id}', 'HojaRutaController@getVisualizar');

// Relacionadas al triaje
Route::get('triaje/registrar', 'TriajeController@getTriaje');
Route::post('triaje/registrar', 'TriajeController@postRegistrar');
Route::get('pacientes/listar', 'TriajeController@getPacientes');

// Relacionadas al historial
Route::get('historial/registrar/{triaje_id}', 'HistorialClinicoController@getHistorial');
Route::get('historial/visualizar/{paciente_id}', 'HistorialClinicoController@getVisualizar');

// Relacionadas a psicología
Route::get('psicologia', 'PsicologiaController@getIngreso');
// Relacionadas a examenes especiales
Route::get('examenesEspeciales', 'examenesEspecialesController@getIngreso');

// Relacionadas con laboratorio
Route::get('LaboratorioHDR', 'LaboratorioController@getIndex');
Route::get('LaboratorioHC', 'LaboratorioController@getHC');
Route::get('resultadoslab/ver/pdf/{id}', 'LaboratorioController@getPrevisualizar');

// Relacionadas con consultoría
Route::get('consultoria', 'ConsultoriaController@getIndex');
Route::get('consultoriaHC', 'ConsultoriaController@getHCl');

// Relacionadas con radiologia
Route::get('radiologia', 'RadiologiaController@getIndex');
Route::get('radiologiHC', 'RadiologiaController@getHR');


// Relacionadas con RIT
Route::get('rit/index', 'RitController@getIndex');
Route::put('modificar/rit', 'RitController@putRit');
Route::get('rit/titulos', 'RitController@getTitulos');
Route::get('rit/capitulos/{id}', 'RitController@getCapitulos');
Route::get('rit/articulos/{id}', 'RitController@getArticulos');
Route::get('rit/items/{id}', 'RitController@getItems');
Route::put('modificar/titulo', 'RitController@putTitulo');
Route::put('modificar/capitulo', 'RitController@putCapitulo');
Route::put('modificar/articulo', 'RitController@putArticulo');
Route::put('modificar/item', 'RitController@putItem');
Route::get('rit/ver', 'RitController@getPrevisualizar');
Route::post('registrar/titulo', 'RitController@postTitulo');
Route::post('registrar/capitulo', 'RitController@postCapitulo');
Route::post('registrar/articulo', 'RitController@postArticulo');
Route::post('registrar/item', 'RitController@postItem');


// Módulo de RRHH - Convocatoria
Route::get('personal/convocatoria', 'PersonalController@getCargosConvocatoria');
Route::post('personal/convocatoria', 'PersonalController@postCargosConvocatoria');
// Módulo de RRHH - Requisitos
Route::get('personal/requisitos/{id}', 'PersonalController@getRequisitos');
Route::post('personal/registrar/requisitos/{id}', 'PersonalController@postRegistrarRequisitos');
Route::post('personal/modificar/requisitos/{id}', 'PersonalController@postModificarRequisitos');
Route::post('personal/eliminar/requisitos/{id}', 'PersonalController@postEliminarRequisitos');
// Módulo de RRHH - Requerimientos
Route::get('personal/personal', 'PersonalController@getCargosPreSeleccion');
Route::get('personal/seleccion/requerimientos/{id}', 'PersonalController@getSeleccionRequerimientos');
Route::get('personal/seleccion/postulante/{id}', 'PersonalController@getSeleccionPostulante');
Route::post('personal/registrar/postulante/{id}', 'PersonalController@postSeleccionRegistrarPostulante');
// Módulo de RRHH - Selección
Route::get('personal/seleccion', 'PersonalController@getCargosSeleccion');
Route::get('personal/seleccion/listaPostulantes/{id}', 'PersonalController@getListaPostulantes');
Route::get('personal/seleccion/estado/{id}', 'PersonalController@getEstadoPostulante');
Route::get('personal/seleccion/noEstado/{id}', 'PersonalController@getNoEstadoPostulante');
Route::get('personal/seleccion/cv/{id}', 'PersonalController@getCvPostulante');
// Módulo de RRHH - Contratación
Route::get('personal/seleccionados', 'PersonalController@getSeleccionResultados');
Route::get('personal/contratacion', 'PersonalController@getPersonalContratado');
Route::post('personal/contratacion/listarFecha', 'PersonalController@getPersonalContratadoFecha');
Route::get('personal/datos/personal/{id}', 'PersonalController@getCargarDatos');
Route::post('personal/registrar/personal', 'PersonalController@postRegistrarPersonal');


// Procesos
Route::get('proceso/registrar', 'ProcesoController@getRegister');
Route::post('proceso/registrar', 'ProcesoController@postRegister');
Route::get('proceso/{id}', 'ProcesoController@getEditar');
Route::put('proceso/{id}', 'ProcesoController@putEditar');
Route::delete('proceso/{id}', 'ProcesoController@delete');
// Operaciones
Route::get('operacion/registrar', 'OperacionController@getRegister');
Route::post('operacion/registrar', 'OperacionController@postRegister');
Route::get('operacion/{id}', 'OperacionController@getEditar');
Route::put('operacion/{id}', 'OperacionController@putEditar');
Route::delete('operacion/{id}', 'OperacionController@delete');
// Áreas
Route::get('area/registrar', 'AreaController@getRegister');
Route::post('area/registrar', 'AreaController@postRegister');
Route::get('area/{id}', 'AreaController@getEditar');
Route::put('area/{id}', 'AreaController@putEditar');
Route::delete('area/{id}', 'AreaController@delete');

// Presupuestos
Route::get('presupuesto/registrar', 'PresupuestoController@getRegister');
Route::post('presupuesto/registrar', 'PresupuestoController@postRegister');
Route::get('presupuesto/{id}', 'PresupuestoController@getEditar');
Route::put('presupuesto/{id}', 'PresupuestoController@putEditar');
Route::delete('presupuesto/{id}', 'AreaController@delete');

// Indicadores de gestión
Route::get('indicadores/atencion-cliente', 'IndicadorController@getAtencionCliente');
Route::get('indicadores/gestion-calidad', 'IndicadorController@getGestionCalidad');

// Indicadores - Atención al cliente
Route::get('indicadores/indice-perdidas', 'AtencionClienteController@getIndicePerdidas');
Route::get('calcular/indice-perdidas', 'AtencionClienteController@calcIndicePerdidas');
Route::get('indicadores/indice-crecimiento', 'AtencionClienteController@getIndiceCrecimiento');
Route::get('calcular/indice-crecimiento', 'AtencionClienteController@calcIndiceCrecimiento');
Route::get('indicadores/indice-aceptacion', 'AtencionClienteController@getIndiceAceptacion');
Route::get('calcular/indice-aceptacion', 'AtencionClienteController@calcIndiceAceptacion');
Route::get('indicadores/indice-atencion', 'AtencionClienteController@getIndiceAtencion');
Route::get('calcular/indice-atencion', 'AtencionClienteController@calcIndiceAtencion');

// Indicadores - Gestión de calidad
Route::get('indicadores/gestion-calidad/financiero', 'GestionCalidadController@getGCFinanciero');
Route::post('indicadores/gestion-calidad/financiero/grafica', 'GestionCalidadController@postGCFinancieroGrafica');
Route::get('indicadores/gestion-calidad/proceso', 'GestionCalidadController@getGCProceso');
Route::post('indicadores/gestion-calidad/proceso/grafica', 'GestionCalidadController@postGCProcesoGrafica');

// Indicadores - Recursos humanos

// Indicadores - Planeamiento estratégico
