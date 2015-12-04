<?php
	$connection =mysqli_connect("localhost","root","","sil");
	$id 	= $_REQUEST['id'];
	if ($id<>null or $id<>"no") {
		$query="select id,tipoRadiologia,descripcion,hojaruta_id from resultadoradiologia where hojaruta_id=".$id." and estado='pendiente'";
		$query1="select COUNT(*) from resultadoradiologia where hojaruta_id=".$id." and estado='pendiente'";
		$Con=mysqli_query($connection,$query);

    		$Con1=mysqli_query($connection,$query1);
    		@$Numero=mysqli_fetch_row($Con1);
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
                            <label for='comment'>Tipo de Radiologia :</label>
                                    <input type='text' name='unidad' class='form-control' readonly value='".$cre[1]."'/>
                                    <div class='form-group'>
                                      <label for='comment'>Descripcion:</label>
                                      <textarea class='form-control' rows='5' id='comment' readonly style='resize: none;'>".$cre[2]."</textarea>
                                    </div>
                                    <div>
                                        <div class='checkbox' align='center'>
                                        &nbsp;&nbsp;<input id='".$cre[0]."-".$cre[3]."'type='checkbox' onClick='actualizarRegistro(this.id);'>Realizado
                                        </div>
                                    </div>
                          </div>";
    	    	}
    	    	if ($j>1) {
    	    		echo "<div class='tab-pane' id='tab".$j."'>
                                  <label for='comment'>Tipo de Radiologia:</label>
                                    <input type='text' name='unidad' class='form-control' readonly value='".$cre[1]."'/>
                                    <div class='form-group'>
                                      <label for='comment'>Descripcion:</label>
                                      <textarea class='form-control' rows='5' id='comment' style='resize: none;' readonly>".$cre[2]."</textarea>
                                    </div>
                                    <div>
                                        <div class='checkbox' align='center'>
                                        &nbsp;&nbsp;<input id='".$cre[0]."-".$cre[3]."' type='checkbox' onClick='actualizarRegistro(this.id);' >Realizado
                                        </div>
                                    </div>
                          </div>";
    	    	}
    	    	$j=$j+1;
    	    }
    	    echo "</div>";
  }
	if ($id=="no") 
	{
		echo "<ul class='nav nav-tabs'>
                            <li class='active'><a href='#tab1' data-toggle='tab'>Radiologia 1</a></li>
               </ul>
                      <div class='tab-content'>
                            <div class='tab-pane active' id='tab1'>
                                <label for='comment'>Tipo de Radiologia:</label>
                                <input type='text' name='unidad' class='form-control' readonly />
                                <div class='form-group'>
                                  <label for='comment'>Descripcion:</label>
                                  <textarea class='form-control' rows='5' id='comment'  readonly style='resize: none;'></textarea>
                                </div>
                                <div>
                                    <div class='checkbox' align='center'>
                                    &nbsp;&nbsp;<input disabled type='checkbox'>Realizado
                                    </div>
                                </div>
                            </div>
             </div>";
	}
?>