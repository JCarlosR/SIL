var values = [];
function asignar() {
    $("input[name=origen]:checked").each(function(){
        values.push($(this));
    });

    $(values).each( function(i,element) {
        var _this = $(this);
        var datosEnviados =
        {
            'cargo_id': $(this).val(),
            'estado': 1
        };

        $.ajax({
            type: 'POST',
            url: location.href,
            data: datosEnviados,
            dataType: 'json',
            encode: true
        }).done(function(datos){
            if(datos.exito){
                _this.attr('name','destino');
                _this.parent().appendTo('#asignados');
            }
            else
                alert('No se pudo realizar la asignación.');
        });
    });
    values.length=0;
}
function devolver() {
    $("input[name=destino]:checked").each(function(){
        values.push($(this));
    });

    $(values).each( function(i,element) {
        var _this = $(this);
        var datosEnviados =
        {
            'cargo_id': $(this).val(),
            'estado': 0
        };

        $.ajax({
            type: 'POST',
            url: location.href,
            data: datosEnviados,
            dataType: 'json',
            encode: true
        }).done(function(datos){
            if(datos.exito){
                _this.attr('name','origen');
                _this.parent().appendTo('#noAsignados');
            }
            else
                alert('No se pudo realizar la eliminación.');
        });

    });
    values.length=0;
}