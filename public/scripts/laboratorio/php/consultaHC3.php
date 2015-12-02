<?php
	$connection =mysqli_connect("localhost","root","","lezama");
	$idR 	= $_REQUEST['idR'];
	$pos=strpos($idR,"-");
	$id=substr($idR, 0, $pos);
	$resultado=substr($idR,(int)$pos+1);
	$query="update resultadoslaboratorio
				   set Resultado ='".$resultado."' ,
				   	   fechaRegistro=CURDATE()
				   where id=".$id ."";
	mysqli_query($connection,$query);
?>