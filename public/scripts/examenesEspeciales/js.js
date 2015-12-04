function cargaPaciente(obj){
                var dni = obj.toString();
                var dataString = 'dni='+dni;
                $.ajax({
                    type: "POST",
                    url: "scripts/examenesEspeciales/php/paciente.php",
                    data: dataString,
                    success: function(data) {
                        $('#resuPaciente').fadeIn(1000).html(data);
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "scripts/examenesEspeciales/php/pacientes.php",
                    data: dataString,
                    success: function(data) {
                        $('#resultado').fadeIn(1000).html(data);
                    }
                });

}

function cargaExamen(obj){
                var id = obj.toString();
                var dataString = 'id='+id;
                $.ajax({
                    type: "POST",
                    url: "scripts/examenesEspeciales/php/examen.php",
                    data: dataString,
                    success: function(data) {
                        $('#examen').fadeIn(1000).html(data);
                    }
                });
}

function guardar(obj){
                var contenedor=document.getElementById('val');
                var va=contenedor.value; 

                var valor = obj.toString();
                var total = va.toString()+'-'+valor;
                var dataString = 'total='+total;

                $.ajax({
                    type: "POST",
                    url: "scripts/examenesEspeciales/php/grabar.php",
                    data: dataString,
                    success: function(data) {
                        $('#C').fadeIn(1000).html(data);
                    }
                });

}

function cargaExame(obj){
                var id = obj.toString();
                var dataString = 'id='+id;
                $.ajax({
                    type: "POST",
                    url: "scripts/examenesEspeciales/php/examen.php",
                    data: dataString,
                    success: function(data) {
                        $('#examenR').fadeIn(1000).html(data);
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "scripts/examenesEspeciales/php/resultado.php",
                    data: dataString,
                    success: function(data) {
                        $('#diagnosticoRegistrado').fadeIn(1000).html(data);
                    }
                });

}
