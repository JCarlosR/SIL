<?php

  $total 	= $_REQUEST['total'];
  @$pos=strpos($total,"-");
  @$id=substr($total, 0, $pos);
  @$examen=substr($total,(int)$pos+1);

  $connection =mysqli_connect("localhost","root","","lezama");

	$update="update examenesespeciales set resultado='".$examen."',fechaRegistro=curdate(),estado='realizado' where id=".$id."";
	mysqli_query($connection,$update);

	echo"<script type=\"text/javascript\"> alert('Se guardo correctamente los esquemas...');</script>";
	echo"<script type=\"text/javascript\">window.location.reload();</script>";
?>