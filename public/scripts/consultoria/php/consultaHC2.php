<?php
	$connection =mysqli_connect("localhost","root","","sil");
	$id 	= $_REQUEST['id'];
	if ($id<>null or $id<>"no") {
		$query="select id,temaConsultoria,historialClinico_id from resultadoconsutoria where historialClinico_id=".$id." and resultado='' and estado='realizado'";
		$query1="select COUNT(*) from resultadoconsutoria where historialClinico_id=".$id." and resultado='' and estado='realizado'";
    $Con=mysqli_query($connection,$query);
    $Con1=mysqli_query($connection,$query1);
    @$Numero=mysqli_fetch_row($Con1);
    

    if(@mysqli_num_rows($Con)>0)
      { 
        $j=1;
    		echo " <ul class='nav nav-tabs'>";
    	    	for ($i = 1; $i <=$Numero[0] ; $i++) {
       				if ($i == 1) {
       					echo "<li class='active'><a href='#tab1' data-toggle='tab'>Tema 1</a></li>";
       				}
       				if ($i > 1) {
       					echo "<li><a href='#tab".$i."' data-toggle='tab'>Tema ".$i."</a></li>";
       				}		
    			}
    		echo "</ul>
    			  <div class='tab-content'>";
    		while(@$cre=mysqli_fetch_row($Con))
    	    {	
    	    	if ($j==1) {
    	    		echo "<div class='tab-pane active' id='tab1'>
                            <label for='comment'>Tema a Asesorado:</label>
                                    <input type='text' name='unidad' class='form-control' readonly value='".$cre[1]."'/>
                                    <div class='form-group'>
                                      <label for='comment'>Resultado:</label>
                                      <textarea class='form-control' rows='5' id='commen".$j."' style='resize: none;'></textarea>
                                    </div>
                                    <input type='button' id='".$cre[0]."-".$cre[2]."' onClick='registrarResultado(this.id,commen".$j.".value);' class='btn btn-success' align='center' value='Guardar'> 
                          </div>";
    	    	}
    	    	if ($j<>1) {
    	    		echo "<div class='tab-pane' id='tab".$j."'>
                                  <label for='comment'>Tema a Asesorado:</label>
                                    <input type='text' name='unidad' class='form-control' readonly value='".$cre[1]."'/>
                                    <div class='form-group'>
                                      <label for='comment'>Resultado:</label>
                                      <textarea class='form-control' rows='5' id='commen".$j."' style='resize: none;'></textarea>
                                    </div>
                                    <input type='button' id='".$cre[0]."-".$cre[2]."' onClick='registrarResultado(this.id,commen".$j.".value);' class='btn btn-success' align='center' value='Guardar'>
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
                            <li class='active'><a href='#tab1' data-toggle='tab'>Tema 1</a></li>
               </ul>
                      <div class='tab-content'>
                            <div class='tab-pane active' id='tab1'>
                                <label for='comment'>Tema a Asesorado:</label>
                                <input type='text' name='unidad' class='form-control' readonly />
                                <div class='form-group'>
                                  <label for='comment'>Resultado:</label>
                                  <textarea class='form-control' rows='5' id='comment'  readonly style='resize: none;'></textarea>
                                </div>
                                <button disabled class='btn btn-success' align='center'>Guardar</button>
                            </div>
             </div>";
      }
  }
	if ($id=="no" and $v<>1) 
	{
		echo "<ul class='nav nav-tabs'>
                            <li class='active'><a href='#tab1' data-toggle='tab'>Tema 1</a></li>
               </ul>
                      <div class='tab-content'>
                            <div class='tab-pane active' id='tab1'>
                                <label for='comment'>Tema a Asesorado:</label>
                                <input type='text' name='unidad' class='form-control' readonly />
                                <div class='form-group'>
                                  <label for='comment'>Resultado:</label>
                                  <textarea class='form-control' rows='5' id='comment'  readonly style='resize: none;'></textarea>
                                </div>
                                <button disabled class='btn btn-success' align='center'>Guardar</button>
                            </div>
             </div>";
	}
?>