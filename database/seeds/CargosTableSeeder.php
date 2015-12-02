<?php

use App\Atribucion;
use App\Cargo;
use App\Funcion;
use App\Relacion;
use App\Requisito;
use Illuminate\Database\Seeder;

class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Gerente general

        $gerenteGeneral = Cargo::create([
            'MOF_id'  => 1,
            'unidad'  => 'GERENCIA GENERAL',
            'nombre'  => 'GERENTE GENERAL',
            'funcion' => 'Planificar, organizar, coordinar, dirigir, supervisar y evaluar todas las actividades asistenciales y técnico administrativas, que se desarrollan.'
        ]);

        Relacion::create([
            'cargo_id' => $gerenteGeneral->id, 'tipo' => 'interna',
            'descripcion' => 'Tiene mando directo sobre el personal Asistencial, Administrativo y Técnico de la Consultora.'
        ]);
        Relacion::create([
            'cargo_id' =>  $gerenteGeneral->id, 'tipo' => 'interna',
            'descripcion' => 'Coordina y ejecuta acciones con las Gerencias y Unidades Orgánicas de la Consultora.'
        ]);
        Relacion::create([
            'cargo_id' => $gerenteGeneral->id, 'tipo' => 'interna',
            'descripcion' => 'Coordina actividades y recibe información de las diferentes gerencias y unidades operativas de la Consultora.'
        ]);
        Relacion::create([
            'cargo_id' => $gerenteGeneral->id, 'tipo' => 'externa',
            'descripcion' => 'Depende directamente y reporta el cumplimiento de sus funciones del Director de la Dirección de Salud V Lima Ciudad.'
        ]);
        Relacion::create([
            'cargo_id' => $gerenteGeneral->id, 'tipo' => 'externa',
            'descripcion' => 'Coordina y reporta directamente asuntos relevantes con el Ministro y Vice Ministro de Salud.'
        ]);
        Relacion::create([
            'cargo_id' =>  $gerenteGeneral->id, 'tipo' => 'externa',
            'descripcion' => 'Ministerio de Salud y sus órganos descentralizados, desconcentrados y establecimientos de salud.'
        ]);

        Atribucion::create([
            'cargo_id' =>  $gerenteGeneral->id,
            'descripcion' => 'Representa legalmente a LEZAMA Consultores de Salud Ocupacional S.C.R.L.'
        ]);
        Atribucion::create([
            'cargo_id' =>  $gerenteGeneral->id,
            'descripcion' => 'Autoriza la ejecución de actividades y otros de la Consultora.'
        ]);
        Atribucion::create([
            'cargo_id' => $gerenteGeneral->id,
            'descripcion' => 'Convoca la ejecución de reuniones técnicas administrativas de la Consultora.'
        ]);
        Atribucion::create([
            'cargo_id' => $gerenteGeneral->id,
            'descripcion' => 'Controla la mejora continua de los procesos organizacionales enfocados en los objetivos de los usuarios.'
        ]);


        Funcion::create([
            'cargo_id' => $gerenteGeneral->id,
            'descripcion' => 'Contratar todas las posiciones gerenciales, realizar evaluaciones periódicas acerca del cumplimiento y desarrollar metas a corto y a largo plazo para cada una.'
        ]);
        Funcion::create([
            'cargo_id' => $gerenteGeneral->id,
            'descripcion' => 'Coordinar reuniones regulares con los gerentes para asegurar su rentabilidad y eficiencia.'
        ]);
        Funcion::create([
            'cargo_id' => $gerenteGeneral->id,
            'descripcion' => 'Crear y mantener buenas relaciones con las instituciones financieras, proveedores y clientes.'
        ]);
        Funcion::create([
            'cargo_id' => $gerenteGeneral->id,
            'descripcion' => 'Supervisar y mantener planes de remuneración para todos los empleados.'
        ]);
        Funcion::create([
            'cargo_id' => $gerenteGeneral->id,
            'descripcion' => 'Elaboración del planeamiento estratégico.'
        ]);
        Funcion::create([
            'cargo_id' => $gerenteGeneral->id,
            'descripcion' => 'Evaluación de nuevas inversiones.'
        ]);
        Funcion::create([
            'cargo_id' => $gerenteGeneral->id,
            'descripcion' => 'Gerenciamiento del SIG.'
        ]);
        Funcion::create([
            'cargo_id' =>  $gerenteGeneral->id,
            'descripcion' => 'Revisión anual del SIG.'
        ]);
        Funcion::create([
            'cargo_id' => $gerenteGeneral->id,
            'descripcion' => 'Elaboración y aprobación de los planes de mejora.'
        ]);
        Funcion::create([
            'cargo_id' =>  $gerenteGeneral->id,
            'descripcion' => 'Revisión continúa de la normatividad legal vigente, establecimiento de brechas y planes de levantamiento.'
        ]);
        Funcion::create([
            'cargo_id' => $gerenteGeneral->id,
            'descripcion' => 'Representación legal de la empresa.'
        ]);

        Requisito::create([
            'cargo_id' => $gerenteGeneral->id,
            'nombre' => 'Educación mínima',
            'descripcion' => 'Título Profesional de Médico Cirujano'
        ]);
        Requisito::create([
            'cargo_id' => $gerenteGeneral->id,
            'nombre' => 'Deseable',
            'descripcion' => 'Estudios de Maestría en Gestión de Servicios de Salud'
        ]);
        Requisito::create([
            'cargo_id' => $gerenteGeneral->id,
            'nombre' => 'Experiencia',
            'descripcion' => 'Experiencia mínima de 2 años en labores similares al cargo'
        ]);
        Requisito::create([
            'cargo_id' => $gerenteGeneral->id,
            'nombre' => 'Capacidades',
            'descripcion' => 'Capacidad de dirección, coordinación, organización y control de los recursos asignados.'
        ]);
        Requisito::create([
            'cargo_id' => $gerenteGeneral->id,
            'nombre' => 'Actitud',
            'descripcion' => 'Actitud proactiva y con orientación a resultados.'
        ]);


        // Gerente de operaciones

        $gerenteOperaciones = Cargo::create([
            'MOF_id'  => 1,
            'unidad'  => 'GERENCIA DE OPERACIONES',
            'nombre'  => 'GERENTE DE OPERACIONES',
            'funcion' => 'Planificar, organizar, supervisar y evaluar el plan de atención la empresa cliente según requerimiento.'
        ]);

        Relacion::create([
            'cargo_id' => $gerenteOperaciones->id, 'tipo' => 'interna',
            'descripcion' => 'Depende directamente y reporta el cumplimiento de sus funciones a la Gerencia General.'
        ]);
        Relacion::create([
            'cargo_id' =>  $gerenteOperaciones->id, 'tipo' => 'interna',
            'descripcion' => 'Tiene mando directo sobre la coordinación general, personal asistencial y técnico de la Consultora.'
        ]);
        Relacion::create([
            'cargo_id' => $gerenteOperaciones->id, 'tipo' => 'interna',
            'descripcion' => 'Coordina y ejecuta acciones con las otras Gerencias y Coordinación General de la Consultora.'
        ]);
        Relacion::create([
            'cargo_id' => $gerenteOperaciones->id, 'tipo' => 'interna',
            'descripcion' => 'Recibe información de las diferentes gerencias y unidad operativa de la Consultora.'
        ]);
        Relacion::create([
            'cargo_id' => $gerenteOperaciones->id, 'tipo' => 'externa',
            'descripcion' => 'Coordina con empresas privadas de diferentes rubros económicos.'
        ]);

        Atribucion::create([
            'cargo_id' => $gerenteOperaciones->id,
            'descripcion' => 'Tiene a su cargo el manejo directo del plan de atención a la empresa cliente, y planea o ejecuta cualquier cambio, modificación o mejora si lo cree necesario.'
        ]);
        Atribucion::create([
            'cargo_id' => $gerenteOperaciones->id,
            'descripcion' => 'Se encarga también de solicitar los equipos o instrumentos necesarios para la mejor atención de los usuarios.'
        ]);
        Atribucion::create([
            'cargo_id' => $gerenteOperaciones->id,
            'descripcion' => 'Tiene autoridad en el manejo del personal a su cargo autorizada para la contratación de personal temporal para atención de las empresas cliente.'
        ]);

        Funcion::create([
            'cargo_id' => $gerenteOperaciones->id,
            'descripcion' => 'Evalúa la solicitud en función de la capacidad de los procesos y de los recursos.'
        ]);
        Funcion::create([
            'cargo_id' => $gerenteOperaciones->id,
            'descripcion' => 'Determina las características del servicio.'
        ]);
        Funcion::create([
            'cargo_id' => $gerenteOperaciones->id,
            'descripcion' => 'Aprueba la solicitud de servicio.'
        ]);
        Funcion::create([
            'cargo_id' => $gerenteOperaciones->id,
            'descripcion' => 'Gestiona el  tiempo y los recursos.'
        ]);
        Funcion::create([
            'cargo_id' => $gerenteOperaciones->id,
            'descripcion' => 'Coordina con logística  sobre el requerimiento de recursos: materiales y humanos.'
        ]);
        Funcion::create([
            'cargo_id' => $gerenteOperaciones->id,
            'descripcion' => 'Elabora el Plan de Atención en la empresa: flujograma, cronograma de trabajo, protocolo de atención y se envía a la Coordinación.'
        ]);
        Funcion::create([
            'cargo_id' => $gerenteOperaciones->id,
            'descripcion' => 'Coordina con responsable de empresa cliente junto con Coordinación.'
        ]);
        Funcion::create([
            'cargo_id' => $gerenteOperaciones->id,
            'descripcion' => 'Verifica los riesgos de impactos de trabajo en instalaciones del cliente.'
        ]);
        Funcion::create([
            'cargo_id' => $gerenteOperaciones->id,
            'descripcion' => 'Evalúa el desarrollo de la atención en la empresa.'
        ]);
        Funcion::create([
            'cargo_id' => $gerenteOperaciones->id,
            'descripcion' => 'Elaboración y presentación de Informes a la Empresa.'
        ]);

        Requisito::create([
            'cargo_id' => $gerenteOperaciones->id,
            'nombre' => 'Educación mínima',
            'descripcion' => 'Título Profesional de Médico Cirujano.'
        ]);
        Requisito::create([
            'cargo_id' => $gerenteOperaciones->id,
            'nombre' => 'Deseable',
            'descripcion' => 'Estudios de Maestría o especialidad en Salud Ocupacional.'
        ]);
        Requisito::create([
            'cargo_id' => $gerenteOperaciones->id,
            'nombre' => 'Experiencia',
            'descripcion' => 'Experiencia mínima de 3 años en labores similares al cargo.'
        ]);
        Requisito::create([
            'cargo_id' => $gerenteOperaciones->id,
            'nombre' => 'Capacidades',
            'descripcion' => 'Capacidad de dirección, coordinación, organización y control de los recursos asignados.'
        ]);
        Requisito::create([
            'cargo_id' => $gerenteOperaciones->id,
            'nombre' => 'Actitud',
            'descripcion' => 'Actitud proactiva y con orientación a resultados.'
        ]);

        $gerenteAdm = Cargo::create([ 'MOF_id' => 1, 'unidad' => 'GERENCIA ADMINISTRATIVA Y LOGÍSTICA', 'nombre' => 'GERENTE ADMINISTRATIVO', 'funcion' => '' ]);
        Funcion::create([ 'cargo_id' => $gerenteAdm->id, 'descripcion' => 'Crear programas de publicidad y estrategias promocionales para incorporar nuevos clientes.' ]);
        Funcion::create([ 'cargo_id' => $gerenteAdm->id, 'descripcion' => 'Captación de nuevos clientes.' ]);
        Funcion::create([ 'cargo_id' => $gerenteAdm->id, 'descripcion' => 'Realiza el estudio técnico económico y de factibilidad del servicio coordinando con las Gerencias de Operaciones y RRHH.' ]);
        Funcion::create([ 'cargo_id' => $gerenteAdm->id, 'descripcion' => 'Realiza la cotización de costo y servicios.' ]);
        Funcion::create([ 'cargo_id' => $gerenteAdm->id, 'descripcion' => 'Diseña protocolo de atención de salud de la empresa.' ]);
        Funcion::create([ 'cargo_id' => $gerenteAdm->id, 'descripcion' => 'Solicita la participación, evalúa y selecciona a los proveedores y mantiene actualizada la lista de los mismos.' ]);
        Funcion::create([ 'cargo_id' => $gerenteAdm->id, 'descripcion' => 'Recepción, evaluación y almacenamiento de materiales e insumos de trabajo.' ]);
        Funcion::create([ 'cargo_id' => $gerenteAdm->id, 'descripcion' => 'Programar y cumplir con el plan de mantenimiento de la Infraestructura.' ]);
        Funcion::create([ 'cargo_id' => $gerenteAdm->id, 'descripcion' => 'Manejo de sueldos con el personal nuevo a contratar.' ]);
        Funcion::create([ 'cargo_id' => $gerenteAdm->id, 'descripcion' => 'Velar por la integridad de los equipos, instrumentos, mobiliario e infraestructura de la empresa.' ]);
        Funcion::create([ 'cargo_id' => $gerenteAdm->id, 'descripcion' => 'Coordina mensualmente con el administrador de condominio los pagos de los servicios y otros aspectos.' ]);
        Funcion::create([ 'cargo_id' => $gerenteAdm->id, 'descripcion' => 'Manejo de caja chica.' ]);
        Funcion::create([ 'cargo_id' => $gerenteAdm->id, 'descripcion' => 'Elabora el presupuesto anual con participación de todas las Gerencias.' ]);
        Funcion::create([ 'cargo_id' => $gerenteAdm->id, 'descripcion' => 'Establecer convenios, contratos y acuerdos con otras instituciones para el logro de los objetivos y metas.' ]);

        $gerenteFinan = Cargo::create([ 'MOF_id' => 1, 'unidad' => 'GERENCIA DE FINANZAS', 'nombre' => 'GERENTE DE FINANZAS', 'funcion' => '' ]);
        Funcion::create([ 'cargo_id' => $gerenteFinan->id, 'descripcion' => 'Elaboración y supervisión de  la facturación de cada servicio.' ]);
        Funcion::create([ 'cargo_id' => $gerenteFinan->id, 'descripcion' => 'Monitoreo y cobranza de facturación.' ]);
        Funcion::create([ 'cargo_id' => $gerenteFinan->id, 'descripcion' => 'Realiza el pago a proveedores y servicios.' ]);
        Funcion::create([ 'cargo_id' => $gerenteFinan->id, 'descripcion' => 'Realiza trámites bancarios.' ]);
        Funcion::create([ 'cargo_id' => $gerenteFinan->id, 'descripcion' => 'Supervisa el manejo y rendición de la caja chica.' ]);
        Funcion::create([ 'cargo_id' => $gerenteFinan->id, 'descripcion' => 'Pago de Haberes al personal de la empresa.' ]);
        Funcion::create([ 'cargo_id' => $gerenteFinan->id, 'descripcion' => 'Proporciona informes mensuales acerca de las condiciones económicas y financieras.' ]);
        Funcion::create([ 'cargo_id' => $gerenteFinan->id, 'descripcion' => 'Supervisa los estados financieros mensuales para asegurar el funcionamiento de la empresa.' ]);

        $gerenteRRHH = Cargo::create([ 'MOF_id' => 1, 'unidad' => 'GERENCIA DE RECURSOS HUMANOS', 'nombre' => 'GERENTE DE RRHH', 'funcion' => '' ]);
        Funcion::create([ 'cargo_id' => $gerenteRRHH->id, 'descripcion' => 'Establecimiento del MOF.' ]);
        Funcion::create([ 'cargo_id' => $gerenteRRHH->id, 'descripcion' => 'Establecimiento de perfil de cargo.' ]);
        Funcion::create([ 'cargo_id' => $gerenteRRHH->id, 'descripcion' => 'Convocatoria, selección y contratación del personal según requisitos del puesto de trabajo.' ]);
        Funcion::create([ 'cargo_id' => $gerenteRRHH->id, 'descripcion' => 'Aprueba los horarios del personal.' ]);
        Funcion::create([ 'cargo_id' => $gerenteRRHH->id, 'descripcion' => 'Controla las asistencias, permisos y tardanzas.' ]);
        Funcion::create([ 'cargo_id' => $gerenteRRHH->id, 'descripcion' => 'Establecimiento de Programa de inducción al personal de acuerdo al puesto a desempeñar.' ]);
        Funcion::create([ 'cargo_id' => $gerenteRRHH->id, 'descripcion' => 'Establecimiento de Programa de capacitación y adiestramiento.' ]);
        Funcion::create([ 'cargo_id' => $gerenteRRHH->id, 'descripcion' => 'Establecimiento del Programa de Bienestar del personal.' ]);
        Funcion::create([ 'cargo_id' => $gerenteRRHH->id, 'descripcion' => 'Establecimiento del Programa de Evaluación de salud del trabajador.' ]);
        Funcion::create([ 'cargo_id' => $gerenteRRHH->id, 'descripcion' => 'Coordinar y controlar la comunicación interna.' ]);
        Funcion::create([ 'cargo_id' => $gerenteRRHH->id, 'descripcion' => 'Elaboración y/o actualización del Reglamento Interno de trabajo.' ]);

        $enfermera = Cargo::create([ 'MOF_id' => 1, 'unidad' => 'ATENCIÓN DE SALUD AL TRABAJADOR', 'nombre' => 'ENFERMERA COORDINADORA', 'funcion' => '' ]);
        Funcion::create([ 'cargo_id' => $enfermera->id, 'descripcion' => 'Recepciona de Gerencia de Operaciones y revisa orden de atención a empresa cliente con respectivo protocolo. ' ]);
        Funcion::create([ 'cargo_id' => $enfermera->id, 'descripcion' => 'Coordina con responsable de empresa cliente la programación de las actividades.' ]);
        Funcion::create([ 'cargo_id' => $enfermera->id, 'descripcion' => 'Supervisa cumplimiento de cronograma de actividades.' ]);
        Funcion::create([ 'cargo_id' => $enfermera->id, 'descripcion' => 'Solicita a Administración requerimientos de material y personal para atención de empresa cliente tanto para dentro de las instalaciones como fuera de ella.' ]);
        Funcion::create([ 'cargo_id' => $enfermera->id, 'descripcion' => 'Coordina con Gerencia de operaciones para determinar fechas de reunión y formular plan de intervención en empresa.' ]);
        Funcion::create([ 'cargo_id' => $enfermera->id, 'descripcion' => 'Coordina con Gerencia de operaciones y RRHH para capacitación y adiestramiento del personal.' ]);
        Funcion::create([ 'cargo_id' => $enfermera->id, 'descripcion' => 'Remite el protocolo de atención a personal que participa así como a los servicios de Rayos X y laboratorio.' ]);
        Funcion::create([ 'cargo_id' => $enfermera->id, 'descripcion' => 'Usa correo electrónico en comunicaciones a terceros, mencionando fecha de  inicio de la atención a empresa cliente, lugar, nº de atendidos y otros detalles necesarios.' ]);
        Funcion::create([ 'cargo_id' => $enfermera->id, 'descripcion' => 'Coordina con Administración referente a movilidad, alojamiento, alimentación y SCTR del personal.' ]);
        Funcion::create([ 'cargo_id' => $enfermera->id, 'descripcion' => 'Supervisa la gestión telefónica de las interconsultas de los trabajadores a especialistas.' ]);
        Funcion::create([ 'cargo_id' => $enfermera->id, 'descripcion' => 'Supervisa en las instalaciones el desarrollo de actividades del personal de LCSO.' ]);
        Funcion::create([ 'cargo_id' => $enfermera->id, 'descripcion' => 'Supervisa el flujo de atención al trabajador.' ]);
        Funcion::create([ 'cargo_id' => $enfermera->id, 'descripcion' => 'Monitorea en campañas el avance de actividades según cronograma e informa por teléfono y correo electrónico los avances e incidentes importantes a Gerencia de operaciones semanalmente.' ]);
        Funcion::create([ 'cargo_id' => $enfermera->id, 'descripcion' => 'Apoya en algunas cotizaciones a proveedores según necesidad.' ]);
        Funcion::create([ 'cargo_id' => $enfermera->id, 'descripcion' => 'Revisa diariamente el listado de HC pendientes por entregar.' ]);
        Funcion::create([ 'cargo_id' => $enfermera->id, 'descripcion' => 'Entrega semanalmente material para atención de los trabajadores.' ]);
        Funcion::create([ 'cargo_id' => $enfermera->id, 'descripcion' => 'Envío de correos electrónicos de gerencia de operaciones y administración con autorización de los responsables.' ]);
        Funcion::create([ 'cargo_id' => $enfermera->id, 'descripcion' => 'Coordina con personal de mantenimiento (servicio eléctrico, gasfitería, etc.) cuando sea necesario.' ]);
        Funcion::create([ 'cargo_id' => $enfermera->id, 'descripcion' => 'Recepciona a nuevos usuarios (Jefes, supervisores) y brinda información sobre los servicios de Lezama Consultores cuando requieren el servicio de las instalaciones.' ]);
        Funcion::create([ 'cargo_id' => $enfermera->id, 'descripcion' => 'Elabora mensualmente el horario de personal a cargo.' ]);
        Funcion::create([ 'cargo_id' => $enfermera->id, 'descripcion' => 'Elabora resumen de asistencias, faltas y permisos y horas extras del    personal.' ]);
        Funcion::create([ 'cargo_id' => $enfermera->id, 'descripcion' => 'Revisa el resumen de atenciones mensuales de Laboratorio y Rayos X, elaborado por el personal de admisión.' ]);
        Funcion::create([ 'cargo_id' => $enfermera->id, 'descripcion' => 'Reporta lista de atenciones de trabajadores evaluados diariamente.' ]);
        Funcion::create([ 'cargo_id' => $enfermera->id, 'descripcion' => 'Coordina anualmente calibración de equipos y mantiene actualizado el cronograma de calibración y mantenimiento.' ]);

        $medico = Cargo::create([ 'MOF_id' => 1, 'unidad' => 'ATENCIÓN DE SALUD AL TRABAJADOR', 'nombre' => 'MÉDICO', 'funcion' => '' ]);
        Funcion::create([ 'cargo_id' => $medico->id, 'descripcion' => 'Revisa la disponibilidad de material necesario para la atención médica y si es necesario lo solicita a enfermera coordinadora.' ]);
        Funcion::create([ 'cargo_id' => $medico->id, 'descripcion' => 'Recibe y revisa los protocolos de atención de la empresa según tipo de  examen por área y puestos de trabajo.' ]);
        Funcion::create([ 'cargo_id' => $medico->id, 'descripcion' => 'Recibe y registra las atenciones en la hoja de ruta.' ]);
        Funcion::create([ 'cargo_id' => $medico->id, 'descripcion' => 'Recibe los formatos de historia clínica y los registros, verifica el tipo de examen y protocolo de atención.' ]);
        Funcion::create([ 'cargo_id' => $medico->id, 'descripcion' => 'Realiza y registra el examen médico correspondiente.' ]);
        Funcion::create([ 'cargo_id' => $medico->id, 'descripcion' => 'Toma las muestra del Papanicolaou.' ]);
        Funcion::create([ 'cargo_id' => $medico->id, 'descripcion' => 'Realiza lavado de oídos, etc.' ]);
        Funcion::create([ 'cargo_id' => $medico->id, 'descripcion' => 'Coordina con gerencia de operaciones la definición de diagnóstico o interconsultas a especialistas, si fuese necesario.' ]);
        Funcion::create([ 'cargo_id' => $medico->id, 'descripcion' => 'Entrega de resultados y recomendaciones al trabajador.' ]);
        Funcion::create([ 'cargo_id' => $medico->id, 'descripcion' => 'Consolida y elabora informe de evaluación de salud.' ]);
        Funcion::create([ 'cargo_id' => $medico->id, 'descripcion' => 'Participa en la organización de la atención a empresas clientes.' ]);
        Funcion::create([ 'cargo_id' => $medico->id, 'descripcion' => 'Diseña y brinda actividades de capacitación interna o externa según designación de la coordinadora general.' ]);
        Funcion::create([ 'cargo_id' => $medico->id, 'descripcion' => 'Realiza otras actividades designadas por gerencia de operaciones.' ]);
        Funcion::create([ 'cargo_id' => $medico->id, 'descripcion' => 'Cumple con normas de orden y limpieza.' ]);
        Funcion::create([ 'cargo_id' => $medico->id, 'descripcion' => 'Supervisa la conformidad de la historia clínica antes de la entrega.' ]);

        $psicologa = Cargo::create([ 'MOF_id' => 1, 'unidad' => 'ATENCIÓN DE SALUD AL TRABAJADOR', 'nombre' => 'PSICÓLOGA', 'funcion' => '' ]);
        Funcion::create([ 'cargo_id' => $psicologa->id, 'descripcion' => 'Revisa la disponibilidad de material necesario para la atención psicológica y si es necesario lo solicita a coordinadora.' ]);
        Funcion::create([ 'cargo_id' => $psicologa->id, 'descripcion' => 'Recibe y revisa los protocolos de atención de la empresa según tipo de examen por área y puestos de trabajo.' ]);
        Funcion::create([ 'cargo_id' => $psicologa->id, 'descripcion' => 'Recibe y registra las atenciones en la hoja de ruta.' ]);
        Funcion::create([ 'cargo_id' => $psicologa->id, 'descripcion' => 'Realiza y registra la evaluación psicológica correspondiente.' ]);
        Funcion::create([ 'cargo_id' => $psicologa->id, 'descripcion' => 'Consolida y elabora el informe psicológico.' ]);
        Funcion::create([ 'cargo_id' => $psicologa->id, 'descripcion' => 'Participa en la educación en salud a trabajadores que acuden a las instalaciones.' ]);
        Funcion::create([ 'cargo_id' => $psicologa->id, 'descripcion' => 'Diseña y brinda actividades de capacitación interna o externa según designación de la coordinadora general.' ]);
        Funcion::create([ 'cargo_id' => $psicologa->id, 'descripcion' => 'Participa en la selección de personal y mantiene actualizado los CV del personal de planta como de campaña.' ]);
        Funcion::create([ 'cargo_id' => $psicologa->id, 'descripcion' => 'Organiza el programa de capacitación para el personal de campaña.' ]);
        Funcion::create([ 'cargo_id' => $psicologa->id, 'descripcion' => 'Realiza actividades de integración para el personal del centro de labores.' ]);
        Funcion::create([ 'cargo_id' => $psicologa->id, 'descripcion' => 'Mantiene actualizado el periódico mural, con temas de interés' ]);
        Funcion::create([ 'cargo_id' => $psicologa->id, 'descripcion' => 'Supervisa y asesora a internas de psicología para cumplimiento de actividades en Lezama Consultores.' ]);
        Funcion::create([ 'cargo_id' => $psicologa->id, 'descripcion' => 'Realiza otras actividades designadas por Gerencia de Operaciones y RRHH.' ]);
        Funcion::create([ 'cargo_id' => $psicologa->id, 'descripcion' => 'Cumple con normas de orden y limpieza correspondientes a su área de trabajo.' ]);

        $triaje = Cargo::create([ 'MOF_id' => 1, 'unidad' => 'ATENCIÓN DE SALUD AL TRABAJADOR', 'nombre' => 'TRIAJE', 'funcion' => '' ]);
        Funcion::create([ 'cargo_id' => $triaje->id, 'descripcion' => 'Verifica la integridad y funcionamiento de equipos una vez por semana y previo a campañas. ' ]);
        Funcion::create([ 'cargo_id' => $triaje->id, 'descripcion' => 'Antes de iniciar las actividades se encarga de revisar e instalar  el sistema a usar, servidor, equipos y otros para verificar su buen funcionamiento.' ]);
        Funcion::create([ 'cargo_id' => $triaje->id, 'descripcion' => 'Se informa mediante el sistema del día anterior  sobre las actividades pendientes para ese día: historias clínicas, exámenes complementarios y otros.' ]);
        Funcion::create([ 'cargo_id' => $triaje->id, 'descripcion' => 'Llena la Historia Clínica: Registra según el formato que corresponda según protocolo de empresa y el tipo de examen médico (pre ocupacional, anual o de retiro) los datos del trabajador.' ]);
        Funcion::create([ 'cargo_id' => $triaje->id, 'descripcion' => 'Realiza  examen de agudeza visual y test de Ishihara, EKG.' ]);
        Funcion::create([ 'cargo_id' => $triaje->id, 'descripcion' => 'Coordina, en el caso de requerirse, con especialistas para exámenes complementarios fuera de las instalaciones como cardiología, oftalmología.' ]);
        Funcion::create([ 'cargo_id' => $triaje->id, 'descripcion' => 'Adjunta en la historia clínica del trabajador, resultados de exámenes auxiliares que se haya realizado.' ]);
        Funcion::create([ 'cargo_id' => $triaje->id, 'descripcion' => 'Vaciado de datos de las historias clínicas al sistema.' ]);
        Funcion::create([ 'cargo_id' => $triaje->id, 'descripcion' => 'Firma la hoja de ruta indicando el procedimiento que se ha realizado.' ]);
        Funcion::create([ 'cargo_id' => $triaje->id, 'descripcion' => 'Revisa correo institucional de enfermería y da respuesta a lo solicitado.' ]);
        Funcion::create([ 'cargo_id' => $triaje->id, 'descripcion' => 'Capacita según designación de la Coordinadora.' ]);
        Funcion::create([ 'cargo_id' => $triaje->id, 'descripcion' => 'Colabora en los procedimientos de lavado de oídos o toma de PAP.' ]);
        Funcion::create([ 'cargo_id' => $triaje->id, 'descripcion' => 'Cumple con otras actividades designadas por la coordinadora general o gerencia de recursos humanos.' ]);

        $audiom = Cargo::create([ 'MOF_id' => 1, 'unidad' => 'ATENCIÓN DE SALUD AL TRABAJADOR', 'nombre' => 'AUDIOMETRÍA', 'funcion' => '' ]);
        Funcion::create([ 'cargo_id' => $audiom->id, 'descripcion' => 'Verifica la integridad y funcionamiento de equipos una vez por semana y previo a campañas. .' ]);
        Funcion::create([ 'cargo_id' => $audiom->id, 'descripcion' => 'Antes de iniciar las actividades se encarga de revisar e instalar  el sistema a usar, servidor, equipos y otros para verificar su buen funcionamiento.' ]);
        Funcion::create([ 'cargo_id' => $audiom->id, 'descripcion' => 'Se informa mediante el sistema del día anterior  sobre las actividades pendientes para ese día: historias clínicas, exámenes complementarios y otros.' ]);
        Funcion::create([ 'cargo_id' => $audiom->id, 'descripcion' => 'Llena la Historia Clínica: Registra según el formato que corresponda según protocolo de empresa y el tipo de examen médico (pre ocupacional, anual o de retiro) los datos del trabajador.' ]);
        Funcion::create([ 'cargo_id' => $audiom->id, 'descripcion' => 'Realiza la calibración biológica del instrumento a usar.' ]);
        Funcion::create([ 'cargo_id' => $audiom->id, 'descripcion' => 'Realiza  examen de audiometría según guía de procedimientos.' ]);
        Funcion::create([ 'cargo_id' => $audiom->id, 'descripcion' => 'Descarga e imprime los formatos de espirometría sobre las atenciones del día.' ]);
        Funcion::create([ 'cargo_id' => $audiom->id, 'descripcion' => 'Adjunta en la historia clínica del trabajador, resultados de exámenes auxiliares que se haya realizado.' ]);
        Funcion::create([ 'cargo_id' => $audiom->id, 'descripcion' => 'Vaciado de datos de las historias clínicas al sistema.' ]);
        Funcion::create([ 'cargo_id' => $audiom->id, 'descripcion' => 'Firma la hoja de ruta indicando el procedimiento que se ha realizado.' ]);
        Funcion::create([ 'cargo_id' => $audiom->id, 'descripcion' => 'Colabora con los procedimientos de lavado de oídos y PAP.' ]);
        Funcion::create([ 'cargo_id' => $audiom->id, 'descripcion' => 'Revisa correo institucional de enfermería y da respuesta a lo solicitado.' ]);
        Funcion::create([ 'cargo_id' => $audiom->id, 'descripcion' => 'Capacita según designación de la Coordinadora.' ]);
        Funcion::create([ 'cargo_id' => $audiom->id, 'descripcion' => 'Colabora en los procedimientos de lavado de oídos o toma de PAP.' ]);
        Funcion::create([ 'cargo_id' => $audiom->id, 'descripcion' => 'Cumple con otras actividades designadas por la coordinadora general o gerencia de recursos humanos.' ]);

        $espirom = Cargo::create([ 'MOF_id' => 1, 'unidad' => 'ATENCIÓN DE SALUD AL TRABAJADOR', 'nombre' => 'ESPIROMETRÍA', 'funcion' => '' ]);
        Funcion::create([ 'cargo_id' => $espirom->id, 'descripcion' => 'Verifica la integridad y funcionamiento de equipos una vez por semana y previo a campañas.' ]);
        Funcion::create([ 'cargo_id' => $espirom->id, 'descripcion' => 'Antes de iniciar las actividades se encarga de revisar e instalar  el sistema a usar, servidor, equipos y otros para verificar su buen funcionamiento.' ]);
        Funcion::create([ 'cargo_id' => $espirom->id, 'descripcion' => 'Se informa mediante el sistema del día anterior  sobre las actividades pendientes para ese día: historias clínicas, exámenes complementarios y otros.' ]);
        Funcion::create([ 'cargo_id' => $espirom->id, 'descripcion' => 'Llena la Historia Clínica: Registra según el formato que corresponda según protocolo de empresa y el tipo de examen médico (pre ocupacional, anual o de retiro) los datos del trabajador.' ]);
        Funcion::create([ 'cargo_id' => $espirom->id, 'descripcion' => 'Realiza y verifica la calibración diaria del espirómetro.' ]);
        Funcion::create([ 'cargo_id' => $espirom->id, 'descripcion' => 'Realiza  examen de espirometría a los trabajadores de las empresas usuarias.' ]);
        Funcion::create([ 'cargo_id' => $espirom->id, 'descripcion' => 'Registra el lavado del equipo. ' ]);
        Funcion::create([ 'cargo_id' => $espirom->id, 'descripcion' => 'Informa al médico acerca del resultado anormal del colaborador.' ]);
        Funcion::create([ 'cargo_id' => $espirom->id, 'descripcion' => 'Descarga e imprime los formatos de espirometría sobre las atenciones del día.' ]);
        Funcion::create([ 'cargo_id' => $espirom->id, 'descripcion' => 'Adjunta en la historia clínica del trabajador, resultados de exámenes auxiliares que se haya realizado.' ]);
        Funcion::create([ 'cargo_id' => $espirom->id, 'descripcion' => 'Vaciado de datos de las historias clínicas al sistema.' ]);
        Funcion::create([ 'cargo_id' => $espirom->id, 'descripcion' => 'Firma la hoja de ruta indicando el procedimiento que se ha realizado.' ]);
        Funcion::create([ 'cargo_id' => $espirom->id, 'descripcion' => 'Colabora con los procedimientos de lavado de oídos y PAP.' ]);
        Funcion::create([ 'cargo_id' => $espirom->id, 'descripcion' => 'Revisa correo institucional de enfermería y da respuesta a lo solicitado.' ]);
        Funcion::create([ 'cargo_id' => $espirom->id, 'descripcion' => 'Capacita según designación de la Coordinadora.' ]);
        Funcion::create([ 'cargo_id' => $espirom->id, 'descripcion' => 'Colabora en los procedimientos de lavado de oídos o toma de PAP.' ]);
        Funcion::create([ 'cargo_id' => $espirom->id, 'descripcion' => 'Cumple con otras actividades designadas por la coordinadora general o gerencia de recursos humanos.' ]);

        $admision = Cargo::create([ 'MOF_id' => 1, 'unidad' => 'ATENCIÓN DE SALUD AL TRABAJADOR', 'nombre' => 'ADMISIONISTA', 'funcion' => '' ]);
        Funcion::create([ 'cargo_id' => $admision->id, 'descripcion' => 'Recepciona al trabajador y solicita DNI.' ]);
        Funcion::create([ 'cargo_id' => $admision->id, 'descripcion' => 'Registra datos del trabajador en archivo de admisión  y hoja de ruta los exámenes según protocolo de atención. ' ]);
        Funcion::create([ 'cargo_id' => $admision->id, 'descripcion' => 'Entrega hoja de ruta a la persona encargada de atención al cliente quien lo  orienta en los exámenes a realizarse.' ]);
        Funcion::create([ 'cargo_id' => $admision->id, 'descripcion' => 'Registra al reverso de hoja de ruta, la fecha y hora de entrega de los resultados, así como la forma de pago.' ]);
        Funcion::create([ 'cargo_id' => $admision->id, 'descripcion' => 'Coordina vía telefónica la cita y honorarios de médico especialista en caso de interconsulta y comunica a Coordinadora General.' ]);
        Funcion::create([ 'cargo_id' => $admision->id, 'descripcion' => 'Recoge informe de resultados de interconsulta por especialista y recibo por honorarios.' ]);
        Funcion::create([ 'cargo_id' => $admision->id, 'descripcion' => 'Encargada del escaneo de historias clínicas y el archivo de estos, en las carpetas establecidas para empresas clientes.' ]);
        Funcion::create([ 'cargo_id' => $admision->id, 'descripcion' => 'Apoya en la recepción de resultados de rayos X, laboratorio y de oftalmología y comunica a enfermera de turno.' ]);
        Funcion::create([ 'cargo_id' => $admision->id, 'descripcion' => 'Entrega de historias clínicas selladas, lacradas y registra en cuaderno de cargos según designación de Coordinadora General.' ]);
        Funcion::create([ 'cargo_id' => $admision->id, 'descripcion' => 'Envía a solicitud de la empresa historias clínicas o facturas a oficina por agencia de transportes, email o courier.' ]);
        Funcion::create([ 'cargo_id' => $admision->id, 'descripcion' => 'Apoya en triaje cuando hay aumento de demanda de atención.' ]);
        Funcion::create([ 'cargo_id' => $admision->id, 'descripcion' => 'Participa en cursos formativos e informativos en prevención de riesgos para la salud.' ]);
        Funcion::create([ 'cargo_id' => $admision->id, 'descripcion' => 'Fotocopia historias clínicas mineras. ' ]);
        Funcion::create([ 'cargo_id' => $admision->id, 'descripcion' => 'Registra en cuaderno citas médicas recepcionadas vía telefónica o por correo electrónico y comunica a Coordinadora General.' ]);
        Funcion::create([ 'cargo_id' => $admision->id, 'descripcion' => 'Recepciona llamadas telefónicas y deriva con quien corresponda.' ]);
        Funcion::create([ 'cargo_id' => $admision->id, 'descripcion' => 'Responde el intercomunicador.' ]);
        Funcion::create([ 'cargo_id' => $admision->id, 'descripcion' => 'Archiva las HC según indicaciones de la Coordinadora General.' ]);
        Funcion::create([ 'cargo_id' => $admision->id, 'descripcion' => 'Factura diariamente las atenciones por exámenes médicos pre-ocupacionales, anuales y de retiro a empresas con modalidad de pago en efectivo' ]);
        Funcion::create([ 'cargo_id' => $admision->id, 'descripcion' => 'Registra diariamente el reporte de ingreso en efectivo a caja. ' ]);
        Funcion::create([ 'cargo_id' => $admision->id, 'descripcion' => 'Revisa los pagos enviados por correo electrónico y reporta a administración.' ]);
        Funcion::create([ 'cargo_id' => $admision->id, 'descripcion' => 'Apoyo en seguimiento a facturas pendientes de pago.' ]);

        $teclab = Cargo::create([ 'MOF_id' => 1, 'unidad' => 'ATENCIÓN DE SALUD AL TRABAJADOR', 'nombre' => 'TÉCNICO DE LABORATORIO', 'funcion' => '' ]);
        Funcion::create([ 'cargo_id' => $teclab->id, 'descripcion' => 'Toma de muestras biológicas de acuerdo a guía de procedimiento.' ]);
        Funcion::create([ 'cargo_id' => $teclab->id, 'descripcion' => 'Se encarga de encender, calibrar, limpiar y realizar el mantenimiento preventivo de los equipos de laboratorio clínico (hematología, bioquímica).' ]);
        Funcion::create([ 'cargo_id' => $teclab->id, 'descripcion' => 'Realiza el procesamiento, elaboración y entrega de informes diariamente.' ]);
        Funcion::create([ 'cargo_id' => $teclab->id, 'descripcion' => 'Realizar el lavado, limpieza y esterilización del material de microbiología y de bioquímica.' ]);
        Funcion::create([ 'cargo_id' => $teclab->id, 'descripcion' => 'Preparar las muestras clínicas de pruebas especiales o con resultados anormales, para su envío a los laboratorios de referencia.' ]);
        Funcion::create([ 'cargo_id' => $teclab->id, 'descripcion' => 'Preparar el material para la toma y el procesamiento de muestras clínicas de campañas médicas ocupacionales.' ]);
        Funcion::create([ 'cargo_id' => $teclab->id, 'descripcion' => 'Participar como coordinador del equipo de apoyo de laboratorio clínico, en las campañas médicas ocupacionales.' ]);
        Funcion::create([ 'cargo_id' => $teclab->id, 'descripcion' => 'Mantiene normas de bioseguridad y manejo de residuos apropiado.' ]);
        Funcion::create([ 'cargo_id' => $teclab->id, 'descripcion' => 'Mantener orden y limpieza.' ]);

        $radiolog = Cargo::create([ 'MOF_id' => 1, 'unidad' => 'ATENCIÓN DE SALUD AL TRABAJADOR', 'nombre' => 'RADIOLOGÍA', 'funcion' => '' ]);
        Funcion::create([ 'cargo_id' => $radiolog->id, 'descripcion' => 'Toma de radiografías de tórax según guía de procedimientos.' ]);
        Funcion::create([ 'cargo_id' => $radiolog->id, 'descripcion' => 'Procesamiento e informe de placas radiográficas.' ]);
        Funcion::create([ 'cargo_id' => $radiolog->id, 'descripcion' => 'Mantener seguridad radiológica y control de emisiones en el personal y en el medio ambiente.' ]);
        Funcion::create([ 'cargo_id' => $radiolog->id, 'descripcion' => 'Mantener orden y limpieza.' ]);

        $sistemas = Cargo::create([ 'MOF_id' => 1, 'unidad' => 'ATENCIÓN DE SALUD AL TRABAJADOR', 'nombre' => 'INGENIERO DE SISTEMAS', 'funcion' => '' ]);
        Funcion::create([ 'cargo_id' => $sistemas->id, 'descripcion' => 'Configurar y verificar backups automáticos de base de datos relacional, para el resguardo de la información de las historias clínicas.' ]);
        Funcion::create([ 'cargo_id' => $sistemas->id, 'descripcion' => 'Realizar backups del servidor de archivos de los documentos administrativos de la empresa.' ]);
        Funcion::create([ 'cargo_id' => $sistemas->id, 'descripcion' => 'Crear scripts para generar la base de datos para reportes gerenciales.' ]);
        Funcion::create([ 'cargo_id' => $sistemas->id, 'descripcion' => 'Administrar y configurar los correos corporativos.' ]);
        Funcion::create([ 'cargo_id' => $sistemas->id, 'descripcion' => 'Actualizar la página web y redes sociales corporativas.' ]);
        Funcion::create([ 'cargo_id' => $sistemas->id, 'descripcion' => 'Desarrollar el reporte de atenciones médicas (evaluaciones) para clientes según requerimientos.' ]);
        Funcion::create([ 'cargo_id' => $sistemas->id, 'descripcion' => 'Dar soporte informático a las empresas para la visualización de resultados online.' ]);
        Funcion::create([ 'cargo_id' => $sistemas->id, 'descripcion' => 'Configurar los servidores temporales para las campañas médicas ocupacionales.' ]);
        Funcion::create([ 'cargo_id' => $sistemas->id, 'descripcion' => 'Realizar las visitas de inspección para la instalación del sistema informático en campaña.' ]);
        Funcion::create([ 'cargo_id' => $sistemas->id, 'descripcion' => 'Capacitar en el uso y manejo del sistema de evaluaciones, al personal de la empresa.' ]);
        Funcion::create([ 'cargo_id' => $sistemas->id, 'descripcion' => 'Gestionar las actualizaciones (implementación de formatos y corrección de errores de código) del sistema de evaluaciones, con proveedor del sistema.' ]);

        $asiscon = Cargo::create([ 'MOF_id' => 1, 'unidad' => 'ATENCIÓN DE SALUD AL TRABAJADOR', 'nombre' => 'ASISTENTE CONTABLE', 'funcion' => '' ]);
        Funcion::create([ 'cargo_id' => $asiscon->id, 'descripcion' => 'Realiza la facturación de los servicios.' ]);
        Funcion::create([ 'cargo_id' => $asiscon->id, 'descripcion' => 'Realiza el seguimiento de la facturación.' ]);
        Funcion::create([ 'cargo_id' => $asiscon->id, 'descripcion' => 'Realiza el reporte de comprobantes tributarios.' ]);
        Funcion::create([ 'cargo_id' => $asiscon->id, 'descripcion' => 'Realiza la pre-liquidación de las atenciones y servicios brindado a los clientes.' ]);
        Funcion::create([ 'cargo_id' => $asiscon->id, 'descripcion' => 'Entrega el efectivo o en cheque del personal de apoyo.' ]);
        Funcion::create([ 'cargo_id' => $asiscon->id, 'descripcion' => 'Maneja la caja chica y caja grande.' ]);
        Funcion::create([ 'cargo_id' => $asiscon->id, 'descripcion' => 'Realiza el manejo de libros contables electrónicos.' ]);
        Funcion::create([ 'cargo_id' => $asiscon->id, 'descripcion' => 'Realiza el pago de los servicios.' ]);
        Funcion::create([ 'cargo_id' => $asiscon->id, 'descripcion' => 'Participa en el seguimiento de cuentas por cobrar.' ]);

        $mantenim = Cargo::create([ 'MOF_id' => 1, 'unidad' => 'ATENCIÓN DE SALUD AL TRABAJADOR', 'nombre' => 'MANTENIMIENTO', 'funcion' => '' ]);
        Funcion::create([ 'cargo_id' => $mantenim->id, 'descripcion' => 'Realizar y mantener la limpieza general de la infraestructura de la empresa. ' ]);
        Funcion::create([ 'cargo_id' => $mantenim->id, 'descripcion' => 'Mantener en buen estado los elementos de trabajo y dejarlos en los espacios dispuestos para ello.' ]);
        Funcion::create([ 'cargo_id' => $mantenim->id, 'descripcion' => 'Informar sobre desperfectos encontrados en las instalaciones.' ]);
        Funcion::create([ 'cargo_id' => $mantenim->id, 'descripcion' => 'Cumple con normas de manejo de residuos hospitalarios.' ]);
        Funcion::create([ 'cargo_id' => $mantenim->id, 'descripcion' => 'Revisar los insumos que usa y solicitar a Logística los que requiriera.' ]);
        Funcion::create([ 'cargo_id' => $mantenim->id, 'descripcion' => 'Asiste en la entrega personal, de documentos (historias clínicas, facturas, y otros) a empresas locales o couriers.' ]);
        Funcion::create([ 'cargo_id' => $mantenim->id, 'descripcion' => 'Recolectar la ropa médica sucia de los servicios médicos, para su llevado a la lavandería.' ]);
        Funcion::create([ 'cargo_id' => $mantenim->id, 'descripcion' => 'Monitorear el cumplimiento de la programación de mantenimiento de infraestructura.' ]);
        Funcion::create([ 'cargo_id' => $mantenim->id, 'descripcion' => 'Solicitar los materiales de limpieza y productos de higiene.' ]);

    }
}
