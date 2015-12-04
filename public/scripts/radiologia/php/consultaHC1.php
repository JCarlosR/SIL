<?php
	$connection =mysqli_connect("localhost","root","","sil");
	$nombre 	= $_REQUEST['nombre'];
	if ($nombre<>null) {
		$query="select R.historialClinico_id, P.nombre 
				from pacientes P 
				inner join ordenes O
				on O.paciente_id=P.id
				inner join hoja_rutas H
				on H.orden_id=O.id
				inner join resultadoradiologia R
                on R.hojaruta_id=H.id
				where P.nombre like CONCAT('%','".$nombre."','%') and R.estado='realizado'
                group by R.historialClinico_id, P.nombre";

		$Con=mysqli_query($connection,$query);

		while(@$cre=mysqli_fetch_row($Con))
	    {
	    	$query1="select id from resultadoradiologia where historialClinico_id=".$cre[0]." and resultadoDescriptivo='' and estado='realizado'";
			$Con1=mysqli_query($connection,$query1);
	    	if(mysqli_num_rows($Con1)>0)
      			{ $estado='Pendiente';}
      		else{ $estado='Completo';}

			echo "			<tr>
	                            <td>HC".$cre[0]."</td>
	                            <td>".$estado."</td>
	                            <td>".$cre[1]."</td>
	                            <td>
	                                <div>
	                                    &nbsp;&nbsp;<input id='".$cre[0]."' type='checkbox' onClick='validacion(this.id);cargarRadiologias(this.id)'>
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
              <td>&nbsp;</td>";
	}
?>