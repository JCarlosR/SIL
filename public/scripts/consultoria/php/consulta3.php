<?php
	$connection =mysqli_connect("localhost","root","","lezama");
	$id 	= $_REQUEST['id'];
	$query="update resultadoconsutoria
				   set estado ='realizado'
				   where id=".$id ."";
	mysqli_query($connection,$query);
?>