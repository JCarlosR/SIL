$('#buscar').keyup(function(){
                var nombre = $(this).val();      
                var dataString = 'nombre='+nombre;
                
                $.ajax({
                    type: "POST",
                    url: "scripts/consultoria/php/consulta1.php",
                    data: dataString,
                    success: function(data) {
                        $('#resultado').fadeIn(1000).html(data);
                    }
                });
    if (nombre=="") {

                var id = 'no';      
                var dataString = 'id='+id;
                $.ajax({
                    type: "POST",
                    url: "scripts/consultoria/php/consulta2.php",
                    data: dataString,
                    success: function(data) {
                        $('#temas').fadeIn(1000).html(data);
                    }
            });
    }

            });
function validacion(objs) {
    var contenedorPrincipal = document.getElementById("resultado");
    var listaP = contenedorPrincipal.getElementsByTagName("input");
    contador=0;
    for(var j=0; j<listaP.length; ++j) 
      {
          if(listaP[j].checked)
          {
            contador=contador+1;
            if(contador>1)
            {
              listaP[j].checked=false;
            }
          }
      } 
    }
function cargarTemas(objs) {
     var seleccionador = document.getElementById(objs.toString());
     if (seleccionador.checked==true){

                var id = objs.toString();      
                var dataString = 'id='+id;
                
                $.ajax({
                    type: "POST",
                    url: "scripts/consultoria/php/consulta2.php",
                    data: dataString,
                    success: function(data) {
                        $('#temas').fadeIn(1000).html(data);
                    }
                });
    }
    sx=validacionSeleccion();
    if(sx=='no'){
                var id = 'no';      
                var dataString = 'id='+id;
                
                $.ajax({
                    type: "POST",
                    url: "scripts/consultoria/php/consulta2.php",
                    data: dataString,
                    success: function(data) {
                        $('#temas').fadeIn(1000).html(data);
                    }
                }); 
    }
}
function validacionSeleccion() {
    var contenedorPrincipal = document.getElementById("resultado");
    var listaP = contenedorPrincipal.getElementsByTagName("input");
    contador=0;
    var resul ='no';
    for(var j=0; j<listaP.length; ++j) 
      {
          if(listaP[j].checked)
          {
            contador=contador+1;
            if(contador>=1)
            {
              resul='si';
            } 
          }
      }
    return resul; 
}
function actualizarRegistro(objs) {
     var mensaje=objs.toString();

     var posicion = mensaje.indexOf('-');
     var ID1 = mensaje.substring(0,posicion);
     var ID2 = mensaje.substring(posicion+1);
    

     var seleccionador = document.getElementById(objs.toString());
     if (seleccionador.checked==true){ 
                var id = ID1.toString();      
                var dataString = 'id='+id;
                $.ajax({
                    type: "POST",
                    url: "scripts/consultoria/php/consulta3.php",
                    data: dataString,
                    success: function(data) {
                        $('#temas').fadeIn(1000).html(data);
                    }
                });        
    }
    alert('Se actuliazo con exito');
    cargarTemas(ID2);
}
