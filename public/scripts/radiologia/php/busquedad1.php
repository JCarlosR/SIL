<?php
	$connection =mysqli_connect("localhost","root","","sil");
	$stirn 	= $_REQUEST['stirn'];
  $pos=strpos($stirn,"-");
  $id=substr($stirn, 0, $pos);
  $examen=substr($stirn,(int)$pos+1);

	if ($id<>null) {
		$query="select fechaRegistro,resultadoDescriptivo,codFolder from resultadoradiologia where historialClinico_id=".$id." and tipoRadiologia='".$examen."' and resultadoDescriptivo!=''";
		$query1="select COUNT(*) from resultadoradiologia where historialClinico_id=".$id." and tipoRadiologia='".$examen."' and resultadoDescriptivo!=''";
		$Con=mysqli_query($connection,$query);
    $Con1=mysqli_query($connection,$query1);
    @$Numero=mysqli_fetch_row($Con1);
    

    if(@mysqli_num_rows($Con1)>0)
      { 
        $j=1;
        echo " <ul class='nav nav-tabs'>";
            for ($i = 1; $i <=$Numero[0] ; $i++) {
              if ($i == 1) {
                echo "<li class='active'><a href='#taba1' data-toggle='tab'>Radiologia 1</a></li>";
              }
              if ($i > 1) {
                echo "<li><a href='#taba".$i."' data-toggle='tab'>Radiologia ".$i."</a></li>";
              }   
          }
        echo "</ul>
            <div class='tab-content'>";
        while(@$cre=mysqli_fetch_row($Con))
          { 
            if ($j==1) {
              echo "<div class='tab-pane active' id='taba1'>
                            <label for='comment'>Fecha - Codigo de Folder:</label>
                                    <input type='text' name='unidad' class='form-control' readonly value='".$cre[0]." - ".$cre[2]."'/>
                                    <div class='form-group'>
                                      <label for='comment'>Resultado:</label>
                                      <textarea class='form-control' readonly rows='5' id='comment".$j."' style='resize: none;'>".$cre[1]."</textarea>
                                    </div>
                          </div>";
            }
            if ($j<>1) {
              echo "<div class='tab-pane' id='taba".$j."'>
                                  <label for='comment'>Fecha - Codigo de Folder:</label>
                                    <input type='text' name='unidad' class='form-control' readonly value='".$cre[0]." - ".$cre[2]."'/>
                                    <div class='form-group'>
                                      <label for='comment'>Resultado:</label>
                                      <textarea class='form-control' readonly rows='5' id='comment".$j."' style='resize: none;'>".$cre[1]."</textarea>
                                    </div>
                          </div>";
            }
            $j=$j+1;
          }
          echo "</div>";
      }
    else
      {
        $v=1;
          echo "";
      }
}
if ($id=="no" and $v<>1) 
  {
    echo "";
  }
?>
