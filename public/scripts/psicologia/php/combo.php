<?php
	$connection =mysqli_connect("localhost","root","","sil");
	$id 	= $_REQUEST['id'];
	if ($id<>null) {
		$query="select distinct id,observacion from protocolos where empresa_id=".$id."";
		$Con=mysqli_query($connection,$query);
		echo "<label for='proto'>Protocolo</label>";
		echo '<select  id="pro"  class="form-control" onChange="cargaPacientes(this.value);">';
        echo "<option value=''></option>";
		while(@$listas=mysqli_fetch_row($Con))
	    {	
            echo "<option  value='".$listas[0]."'>".$listas[1]."</option>";
	    }
	    echo "</select>";
	}
	else
	{
		echo "  <label for='proto'>Protocolo</label>
				<select disabled id='pro'name='protocolo' class='form-control'>
                  <option value=''></option>
                 </select>";
	}
?>