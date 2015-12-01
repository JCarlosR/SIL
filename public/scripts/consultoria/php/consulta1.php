<?php
	$connection =mysqli_connect("localhost","root","","lezama");
	$nombre 	= $_REQUEST['nombre'];
	if ($nombre<>null) {
		$query="select H.id, P.nombre 
				from pacientes P 
				inner join ordenes O
				on O.paciente_id=P.id
				inner join hoja_rutas H
				on H.orden_id=O.id
				inner join resultadoconsutoria R
                on R.hojaruta_id=H.id
				where P.nombre like CONCAT('%','".$nombre."','%') and R.estado='pendiente'
                group by H.id, P.nombre";
		$Con=mysqli_query($connection,$query);
		while(@$cre=mysqli_fetch_row($Con))
	    {	
			$query1="select COUNT(*) from resultadoconsutoria where hojaruta_id=".$cre[0]." and estado='pendiente'";
			$con1=mysqli_query($connection,$query1);
			@$Numero=mysqli_fetch_row($con1);
			echo "			<tr>
	                            <td>HDR".$cre[0]."</td>
	                            <td>".$Numero[0]."</td>
	                            <td>Pendiente</td>
	                            <td>".$cre[1]."</td>
	                            <td>
	                                <div>
	                                    &nbsp;&nbsp;<input id='".$cre[0]."' type='checkbox' onClick='validacion(this.id);cargarTemas(this.id)'>
	                                </div>
	                            </td>
	                        </tr>";
	    }
	}
	else
	{
		echo "<td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>";
	}
?>