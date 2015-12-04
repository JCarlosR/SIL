<?php
	$connection =mysqli_connect("localhost","root","","sil");
	$id 	= $_REQUEST['ids'];
	if ($id<>null or $id<>"no") {
		$query="select P.nombre,R.historialClinico_id,H.id,R.id 
            from pacientes P 
            inner join ordenes O
            on O.paciente_id=P.id
            inner join hoja_rutas H
            on H.orden_id=O.id
            inner join psicologia R
            on R.hojaruta_id=H.id
            where R.protocolo_id=".$id." and R.estado='pendiente'
            group by H.id, P.nombre";
		$Con=mysqli_query($connection,$query);
    $j=1;
    if(@mysqli_num_rows($Con)>0)
    { 
        while(@$cre=mysqli_fetch_row($Con))
          { 
          echo "<tr>
                    <td>".$j."</td>
                    <td>".$cre[0]."</td>
                    <td>HC".$cre[1]."</td>
                    <td>HR".$cre[2]."</td>
                    <td>
                        <div align='center'>
                          <a href='#' id='".$cre[3]."' onclick='cargarID(this.id);' class='btn btn-success' data-toggle='modal' data-target='#registrarResul'>Ingresar resultados</a>
                        </div>
                     </td>
                </tr>";
              $j=$j+1;
          }
    }
    else
    {
    echo "    <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>";
    }
  }
  else
  {
    echo "    <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>";
  }
?>