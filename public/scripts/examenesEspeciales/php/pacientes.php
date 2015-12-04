<?php
	$connection =mysqli_connect("localhost","root","","sil");
	$dni 	= $_REQUEST['dni'];
	if ($dni<>null or $dni<>"no") {
		$query="select R.tipoExamen,R.fechaRegistro,R.estado,R.id 
            from pacientes P 
            inner join ordenes O
            on O.paciente_id=P.id
            inner join hoja_rutas H
            on H.orden_id=O.id
            inner join examenesespeciales R
            on R.hojaruta_id=H.id
            where P.dni=".$dni."";
		$Con=mysqli_query($connection,$query);
    $j=1;
    if(@mysqli_num_rows($Con)>0)
    { 
        while(@$cre=mysqli_fetch_row($Con))
          { 
            echo "<tr>
                      <td>".$j."</td>
                      <td>".$cre[0]."</td>
                      <td>".$cre[1]."</td>
                      <td>".$cre[2]."</td>
                      <td>";
            if ($cre[2]=='pendiente') {
              echo "<div align='center'>
                          <a href='#' id='".$cre[3]."' onclick='cargaExamen(this.id);' class='btn btn-success' data-toggle='modal' data-target='#registrarResul'>Ingresar resultados</a>
                    </div>";
            }
            else{
              echo "<div align='center'>
                          <a href='#' id='".$cre[3]."' onclick='cargaExame(this.id);' class='btn btn-success' data-toggle='modal' data-target='#MostrarResul'>Ver resultados</a>
                    </div>";
            }
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