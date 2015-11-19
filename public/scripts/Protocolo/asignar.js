$(document).on('ready', funcPrincipal);

function funcPrincipal() {
    $('#asignarExamenes').on('click', asignarExamenes);
    $('#btnGuardar').on('click', guardarAsignacion);
}

function asignarExamenes() {

    $('#myModal').modal('show');
}

function guardarAsignacion(){

}
