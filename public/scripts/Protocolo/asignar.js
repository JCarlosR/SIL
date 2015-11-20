$(document).on('ready', funcPrincipal);
var idPaciente;

var $formExamenes;
var $modalExamenes;

function funcPrincipal() {
    $modalExamenes = $('#modalExamenes');
    $formExamenes = $modalExamenes.find('form');


    $('.asignar').on('click', asignarExamenes);
    $formExamenes.on('submit', guardarAsignacion);
}

function asignarExamenes() {
    idPaciente = $(this).attr('id');

    //traer examenes del paciente
    $modalExamenes.modal('show');
}

function guardarAsignacion(){
    event.preventDefault();
    var examenes = [];
    $(this).find('input[type="checkbox"]:checked').each(function(){
        examenes.push($(this).val());
    });


    var datosEnviados =
    {
        'examenes': examenes,
        'pacienteid': idPaciente,
        'protocoloid': $('#max').text()
    };

    $.ajax({
        type: 'POST',
        url: '../asignar/examenes/paciente',
        data: datosEnviados,
        dataType: 'json',
        encode: true
    }).done(function(datos){
        if(datos.exito){
            $modalExamenes.modal('hide');
        }
        else
            alert('No se pudo realizar la asignación.');
    });

}
