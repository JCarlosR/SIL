<?php
	$connection =mysqli_connect("localhost","root","","sil");
	$id 	= $_REQUEST['id'];
	if ($id<>null) {
		$query="select P.resultado from examenesespeciales P where P.id='".$id."'";
		$Con=mysqli_query($connection,$query);
		@$cre=mysqli_fetch_row($Con);
		if ($cre[0]!="" or $cre[0]!=null) {	
			echo "<input type='text' id='val' value='".$id."' style='Display:none;'><textarea class='form-control' id='diagnosticoR' rows='5' style='resize: none;' readonly>".$cre[0]."</textarea>";
		}
		else{
			echo "<label for='funcion' style='Color:#FF0000;'>No hay resultados</label>";
		}
		
	}
	else
	{
		echo "<label for='funcion' style='Color:#FF0000;'>No hay resultados</label>";
	}
?>