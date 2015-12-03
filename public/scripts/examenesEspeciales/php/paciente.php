<?php
	$connection =mysqli_connect("localhost","root","","lezama");
	$dni 	= $_REQUEST['dni'];
	if ($dni<>null or strlen($dni)<8) {
		$query="select P.nombre from pacientes P where P.dni='".$dni."'";
		$Con=mysqli_query($connection,$query);
		@$cre=mysqli_fetch_row($Con);
		if ($cre[0]!="" or $cre[0]!=null) {	
			echo "Paciente:  
              <label for='funcion' style='Color:#FF0000;'>".$cre[0]."</label>";
		}
		else{
			echo "Paciente:  
              <label for='funcion' style='Color:#FF0000;'>No hay resultados</label>";
		}
		
	}
	else
	{
		echo "Paciente:  
              <label for='funcion' style='Color:#FF0000;'>No hay resultados</label>";
	}
?>