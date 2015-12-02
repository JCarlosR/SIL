$(document).on('ready', funcPrincipal);

function funcPrincipal() {
    $('#formTrabajador').on('submit', agregarFila);
    $('#btnRegistrar').on('click', guardarProtocolo);
}

function agregarFila() {
    event.preventDefault();

    var nombre = $('#txtNombre').val();
    var dni = $('#txtDNI').val();
    var perfil = $('#cboPerfil').val();
    var hijos = $('#txtNumhijos').val();
    var nivel = $('#txtNivel').val();
    var sexo = $('#cboSexo').val();
    var grupo = $('#txtGrupo').val();

    $('tbody').append('<tr><td data-i></td><td>'+nombre+'</td><td>'+dni+'</td><td>'+perfil+'</td><td>'+hijos+'</td><td>'+nivel+'</td><td>'+sexo+'</td><td>'+grupo+'</td></tr>');
    actualizarEnumeracion();
}

function actualizarEnumeracion() {
    var i = 0;
    $('tbody').find('tr').each(function() {
        $(this).find('[data-i]').text(++i);
    });
}

function guardarProtocolo() {
    var filas = [];
    var n = 0;
    var entro = false;

    $('.table tbody tr').each(function() {
        var campo1, campo2, campo3, campo4,campo5, campo6, campo7, campo8;
        $(this).find('td').each(function(index2) {
            switch (index2) {
                case 0:
                    campo1 = $(this).text();
                    entro = true;
                    break;
                case 1:
                    campo2 = $(this).text();
                    entro = true;
                    break;
                case 2:
                    campo3 = $(this).text();
                    entro = true;
                    break;
                case 3:
                    campo4 = $(this).text();
                    entro = true;
                    break;
                case 4:
                    campo5 = $(this).text();
                    entro = true;
                    break;
                case 5:
                    campo6 = $(this).text();
                    entro = true;
                    break;
                case 6:
                    campo7 = $(this).text();
                    entro = true;
                    break;
                case 7:
                    campo8 = $(this).text();
                    entro = true;
                    break;
            }
        });
        if(entro) {
            filas[n] = [campo1, campo2, campo3, campo4,campo5, campo6, campo7, campo8];
            n++;
            entro = false;
        }
    });

    if (n == 0) {
        renderTemplateAlerta('Debe registrar al menos un trabajador.');
        return;
    }

    var datosEnviados =
    {
        'filas': filas,
        'id': $('#max').text(),
        'empresa': $('#cboEmpresa').val()
    };

    $.ajax({
        type: 'POST',
        url: '../protocolo/registrar',
        data: datosEnviados,
        dataType: 'json',
        encode: true
    }).done(function(datos){
        if (datos.exito) {
            location.href = '../registrar/examenes';
        }
        else
            renderTemplateAlerta('No se pudo realizar la asignación.');
    });

}

function activateTemplate(id) {
    var t = document.querySelector(id);
    return $(document.importNode(t.content, true));
}

function renderTemplateAlerta(mensaje) {
    var $alerta = activateTemplate('#template-alerta');
    $alerta.find('span').text(mensaje);
    $('table').prev().prepend($alerta);
}