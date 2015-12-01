$('#buscar').keyup(function(){
                var nombre = $(this).val();      
                var dataString = 'nombre='+nombre;
                
                $.ajax({
                    type: "POST",
                    url: "scripts/radiologia/php/consultaHC1.php",
                    data: dataString,
                    success: function(data) {
                        $('#resultado').fadeIn(1000).html(data);
                    }
                });
    if (nombre=="") {
                var selector = document.getElementById("selector");
                selector.disabled=true;
                selector.value='Seleccione....';

                var id = 'no';      
                var dataString = 'id='+id;
                $.ajax({
                    type: "POST",
                    url: "scripts/radiologia/php/consultaHC2.php",
                    data: dataString,
                    success: function(data) {
                        $('#result').fadeIn(1000).html(data);
                    }
            });
                var stirn ='no-no';
                var dataString = 'stirn='+stirn;
                var selector = document.getElementById("selector");
                selector.value='Seleccione....';
                $.ajax({
                    type: "POST",
                    url: "scripts/radiologia/php/busquedad1.php",
                    data: dataString,
                    success: function(data) {
                        $('#imprime').fadeIn(1000).html(data);
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
function cargarRadiologias(objs) {
     var seleccionador = document.getElementById(objs.toString());
     if (seleccionador.checked==true){

                var id = objs.toString();      
                var dataString = 'id='+id;
                
                $.ajax({
                    type: "POST",
                    url: "scripts/radiologia/php/consultaHC2.php",
                    data: dataString,
                    success: function(data) {
                        $('#result').fadeIn(1000).html(data);
                    }
                });
    }
    sx=validacionSeleccion();
    if(sx=='no'){
                var id = 'no';      
                var dataString = 'id='+id;
                
                $.ajax({
                    type: "POST",
                    url: "scripts/radiologia/php/consultaHC2.php",
                    data: dataString,
                    success: function(data) {
                        $('#result').fadeIn(1000).html(data);
                    }
                }); 
                var stirn ='no-no';
                var dataString = 'stirn='+stirn;
                var selector = document.getElementById("selector");
                selector.value='Seleccione....';
                $.ajax({
                    type: "POST",
                    url: "scripts/radiologia/php/busquedad1.php",
                    data: dataString,
                    success: function(data) {
                        $('#imprime').fadeIn(1000).html(data);
                    }
                });
    
    }
}
function validacionSeleccion() {
    var contenedorPrincipal = document.getElementById("resultado");
    var listaP = contenedorPrincipal.getElementsByTagName("input");
    var selector = document.getElementById("selector");
    selector.disabled=true;
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
              selector.disabled=false;
            } 
          }
      }
    return resul; 
}

function registrarResultado(objs,res,cod) {
     var mensaje=objs.toString();

     var posicion = mensaje.indexOf('-');
     var ID1 = mensaje.substring(0,posicion);
     var ID2 = mensaje.substring(posicion+1);

                var idR = ID1.toString()+'-'+res.toString()+'*'+cod.toString(); 
                var dataString = 'idR='+idR;
                $.ajax({
                    type: "POST",
                    url: "scripts/radiologia/php/consultaHC3.php",
                    data: dataString,
                    success: function(data) {
                        $('#result').fadeIn(1000).html(data);
                    }
                });        

    alert('Se actuliazo con exito');
    cargarRadiologias(ID2);

}
function idHistoria() {
    var contenedorPrincipal = document.getElementById("resultado");
    var listaP = contenedorPrincipal.getElementsByTagName("input");
    for(var j=0; j<listaP.length; ++j) 
      {
          if(listaP[j].checked)
          {
             id=listaP[j].id;
          }
      }
    return id; 
}
$('#selector').change(function(){
                var id=idHistoria();
                var nombre = $(this).val();
                var stirn = id.toString()+'-'+nombre.toString();
                var dataString = 'stirn='+stirn;

                $.ajax({
                    type: "POST",
                    url: "scripts/radiologia/php/busquedad1.php",
                    data: dataString,
                    success: function(data) {
                        $('#imprime').fadeIn(1000).html(data);
                    }
                });

});

