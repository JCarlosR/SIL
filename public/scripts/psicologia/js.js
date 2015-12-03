$('#empresa').change(function(){
                var id = $(this).val();
                var dataString = 'id='+id;

                $.ajax({
                    type: "POST",
                    url: "scripts/psicologia/php/combo.php",
                    data: dataString,
                    success: function(data) {
                        $('#protocol').fadeIn(1000).html(data);
                    }
                });

                var ids = 'no';      
                var dataString = 'ids='+ids;
                $.ajax({
                    type: "POST",
                    url: "scripts/psicologia/php/pacientes.php",
                    data: dataString,
                    success: function(data) {
                        $('#pacientes').fadeIn(1000).html(data);
                    }
                });

});



function cargaPacientes(obj){
                var ids = obj.toString();
                var dataString = 'ids='+ids;
                $.ajax({
                    type: "POST",
                    url: "scripts/psicologia/php/pacientes.php",
                    data: dataString,
                    success: function(data) {
                        $('#pacientes').fadeIn(1000).html(data);
                    }
                });

}
function pick(){
$('#divMiCalendario').datetimepicker({
        format: 'YYYY-MM-DD'
      });
$('#divMiCalendario').data("DateTimePicker").show();
}


function cargarID(obj){
    document.getElementById('carID').innerHTML='';
    document.getElementById('carID').innerHTML = '<label for="">ID</label><input type="text" name="ID" class="form-control" readonly value="'+obj.toString()+'">';
}

function guardarTest(){
                $.ajax({
                    type: "POST",
                    url: "scripts/psicologia/php/grabar.php",
                    data: $("#formulario").serialize(),
                    success: function(data) {
                        $('#C').fadeIn(1000).html(data);
                    }
                });

}