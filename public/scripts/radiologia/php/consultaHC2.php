<?php
	$connection =mysqli_connect("localhost","root","","lezama");
	$id 	= $_REQUEST['id'];
	if ($id<>null or $id<>"no") {
		$query="select id,tipoRadiologia,historialClinico_id from resultadoradiologia where historialClinico_id=".$id." and resultadoDescriptivo='' and estado='realizado'";
		$query1="select COUNT(*) from resultadoradiologia where historialClinico_id=".$id." and resultadoDescriptivo='' and estado='realizado'";
    $Con=mysqli_query($connection,$query);
    $Con1=mysqli_query($connection,$query1);
    @$Numero=mysqli_fetch_row($Con1);
    

    if(@mysqli_num_rows($Con)>0)
      { 
        $j=1;
    		echo " <ul class='nav nav-tabs'>";
    	    	for ($i = 1; $i <=$Numero[0] ; $i++) {
       				if ($i == 1) {
       					echo "<li class='active'><a href='#tab1' data-toggle='tab'>Radiologia 1</a></li>";
       				}
       				if ($i > 1) {
       					echo "<li><a href='#tab".$i."' data-toggle='tab'>Radiologia ".$i."</a></li>";
       				}		
    			}
    		echo "</ul>
    			  <div class='tab-content'>";
    		while(@$cre=mysqli_fetch_row($Con))
    	    {	
    	    	if ($j==1) {
    	    		echo "<div class='tab-pane active' id='tab1'>
                            <label for='comment'>Tipo de Radiologia:</label>
                                    <input type='text' name='unidad' class='form-control' readonly value='".$cre[1]."'/>
                                    <div class='form-group'>
                                      <label for='comment'>Resultado:</label>
                                      <textarea class='form-control' rows='5' id='commen".$j."' style='resize: none;'></textarea>
                                      <label for='comment'>Codigo de Folder:</label>
                                      <input id='ID".$cre[0]."' type='text' name='unidad' class='form-control'/>
                                    </div>
                                    <input type='button' id='".$cre[0]."-".$cre[2]."' onClick='registrarResultado(this.id,commen".$j.".value,ID".$cre[0].".value);' class='btn btn-success' align='center' value='Guardar'> 
                          </div>";
    	    	}
    	    	if ($j<>1) {
    	    		echo "<div class='tab-pane' id='tab".$j."'>
                                  <label for='comment'>Tipo de Radiologia:</label>
                                    <input type='text' name='unidad' class='form-control' readonly value='".$cre[1]."'/>
                                    <div class='form-group'>
                                      <label for='comment'>Resultado:</label>
                                      <textarea class='form-control' rows='5' id='commen".$j."' style='resize: none;'></textarea>
                                      <label for='comment'>Codigo de Folder:</label>
                                      <input id='ID".$cre[0]."' type='text' name='unidad' class='form-control' />
                                    </div>
                                    <input type='button' id='".$cre[0]."-".$cre[2]."' onClick='registrarResultado(this.id,commen".$j.".value,ID".$cre[0].".value);' class='btn btn-success' align='center' value='Guardar'>
                          </div>";
    	    	}
    	    	$j=$j+1;
    	    }
    	    echo "</div>";
      }
      else
      {
        $v=1;
        echo "<ul class='nav nav-tabs'>
                            <li class='active'><a href='#tab1' data-toggle='tab'>Radiologia 1</a></li>
               </ul>
                      <div class='tab-content'>
                            <div class='tab-pane active' id='tab1'>
                                <label for='comment'>Tipo de Radiologia:</label>
                                <input type='text' name='unidad' class='form-control' readonly />
                                <div class='form-group'>
                                  <label for='comment'>Resultado:</label>
                                  <textarea class='form-control' rows='5' id='comment'  readonly style='resize: none;'></textarea>
                                  <label for='comment'>Codigo de Folder:</label>
                                  <input readonly type='text' name='unidad' class='form-control' />
                                </div>
                                <button disabled class='btn btn-success' align='center'>Guardar</button>
                            </div>
             </div>";
      }
  }
	if ($id=="no" and $v<>1) 
	{
		echo "<ul class='nav nav-tabs'>
                            <li class='active'><a href='#tab1' data-toggle='tab'>Radiologia 1</a></li>
               </ul>
                      <div class='tab-content'>
                            <div class='tab-pane active' id='tab1'>
                                <label for='comment'>Tipo de Radiologia:</label>
                                <input type='text' name='unidad' class='form-control' readonly />
                                <div class='form-group'>
                                  <label for='comment'>Resultado:</label>
                                  <textarea class='form-control' rows='5' id='comment'  readonly style='resize: none;'></textarea>
                                  <label for='comment'>Codigo de Folder:</label>
                                  <input readonly type='text' name='unidad' class='form-control' />
                                </div>
                                <button disabled class='btn btn-success' align='center'>Guardar</button>
                            </div>
             </div>";
	}
?>