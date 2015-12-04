<?php
	@$ID=$_POST['ID'];
	@$txtFecha=$_POST['txtFecha'];
	@$espacial=$_POST['espacial'];
	@$intrapersonal=$_POST['intrapersonal'];
	@$interpersonal=$_POST['interpersonal'];
	@$verbal=$_POST['verbal'];
	@$logicoMatematica=$_POST['logicoMatematica'];
	@$kinestesica=$_POST['kinestesica'];
	@$fortaleza=$_POST['fortaleza'];
	@$debilidad=$_POST['debilidad'];
	@$motivacion=$_POST['motivacion'];
	@$personalidad=$_POST['personalidad'];
	@$recomendaciones=$_POST['recomendaciones'];
	@$conclusiones=$_POST['conclusiones'];
	@$fechaIngre=$_POST['txtfechaIngreso'];

	$connection =mysqli_connect("localhost","root","","sil");

	$query="select historialClinico_id,hojaruta_id,protocolo_id,detalleorden_id from psicologia where id=".$ID."";
	$update="update psicologia set fechaRegistro='".$txtFecha."', estado='realizado',fortaleza='".$fortaleza."',debilidad='".$debilidad."',motivacion='".$motivacion."',perosnalidad='".$personalidad."',recomendacion='".$recomendaciones."',conclusion='".$conclusiones."' where id=".$ID."";
	mysqli_query($connection,$update);
	$con1=mysqli_query($connection,$query);
	@$Numero=mysqli_fetch_row($con1);
	$insert="insert into testinteligencia(espacial,intrapersonal,interpersonal,verbal,logico_matematico,kinesetica,historialClinico_id,hojaruta_id,protocolo_id,detalleorden_id,id_test) values ('".$espacial."','".$intrapersonal."','".$interpersonal."','".$verbal."','".$logicoMatematica."','".$kinestesica."',".$Numero[0].",".$Numero[1].",".$Numero[2].",".$Numero[3].",".$ID.")";
	mysqli_query($connection,$insert);
	echo"<script type=\"text/javascript\"> alert('Se guardo correctamente los esquemas...');</script>";
	echo"<script type=\"text/javascript\">window.location.reload();</script>";
?>