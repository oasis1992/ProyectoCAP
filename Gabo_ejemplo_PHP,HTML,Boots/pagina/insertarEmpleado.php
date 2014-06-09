<?php

	

		$link = mysql_connect("localhost", "root");
		mysql_select_db("registro",$link);

    	$nombre = $_POST['nombre'];
    	$apellido = $_POST['apellido'];
    	$direccion = $_POST['direccion'];
    	$telefono = $_POST['telefono'];
    	$email = $_POST['email'];
    	$puesto = $_POST['puesto'];

 
    	 $sql = "INSERT INTO empleado(nombre,apellido,direccion,telefono,email,puesto) VALUES('$nombre','$apellido','$direccion','$telefono','$email','$puesto')";


    	if(!mysql_query($sql, $link)){

?> 


            <script type="text/javascript">
                 alert("No se inserto el empleado correctamente");
                 history.back();
             </script>
<?php

        }else{

?>
            
                <script type="text/javascript">
                   alert("El empleado se inserto correctamente");
                  history.back();
                 </script>

<?php  
        }



    	include_once("empleados.html");
            mysqli_close($link);

?>

?>
