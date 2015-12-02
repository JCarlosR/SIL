<?php
	$connection =mysqli_connect("localhost","root","","lezama");
	$idR 	= $_REQUEST['idR'];
	$pos=strpos($idR,"-");
	$pos1=strpos($idR,"*");

	$id=substr($idR, 0, $pos);
	$resultado=substr($idR,(int)$pos+1,$pos1-2);
	$codigo=substr($idR,(int)$pos1+1);

	$query="update resultadoradiologia
				   set resultadoDescriptivo ='".$resultado."' ,
				   	   fechaRegistro=CURDATE(),
				   	   codFolder='".$codigo."'
				   where id=".$id ."";
	mysqli_query($connection,$query);
?>