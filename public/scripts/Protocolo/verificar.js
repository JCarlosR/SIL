$(document).on('ready', funcPrincipal);

function funcPrincipal() {
    $('#buscar').on('click', buscarProtocolo);
}

function buscarProtocolo() {
    var datosEnviados =
    {
        'id': $('#cboEmpresa').val()
    };

    $.ajax({
        type: 'POST',
        url: location.href,
        data: datosEnviados,
        dataType: 'json',
        encode: true
    }).done(function(datos){
        $('tbody').children('tr').empty();
        var i = 0;
        $.each(datos,function(index,element){
            i = i+1;
            $('tbody').append('<tr><td>'+i+'</td><td>'+(1000+element.id)+'</td><td>'+$('#cboEmpresa option:selected').text()+'</td><td><a href="'+location.href+'/'+element.id+'" id="'+element.id+'" class="btn btn-danger">Ver Orden</a></td></tr>');
        });
    });
}

