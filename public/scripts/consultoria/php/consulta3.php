<?php
	$connection =mysqli_connect("localhost","root","","sil");
	$id 	= $_REQUEST['id'];
	$query="update resultadoconsutoria
				   set estado ='realizado'
				   where id=".$id ."";
	mysqli_query($connection,$query);
?>