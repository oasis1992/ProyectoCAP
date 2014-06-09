<?php

	


		$link = mysql_connect("localhost", "root");
		mysql_select_db("registro",$link);

    	$nombre = $_POST['nombre'];
    	$apellido = $_POST['apellido'];
    	$direccion = $_POST['direccion'];
    	$telefono = $_POST['telefono'];
    	$email = $_POST['email'];

 
    	 $sql = "INSERT INTO cliente(nombre,apellido,direccion,telefono,email) VALUES('$nombre','$apellido','$direccion','$telefono','$email')";


    	if(!mysql_query($sql, $link)){

?> 


            <script type="text/javascript">
                 alert("No se inserto el cliente correctamente");
                 history.back();
             </script>
<?php

        }else{

?>
            
                <script type="text/javascript">
                   alert("El cliente se inserto correctamente");
                  history.back();
                 </script>

<?php  
        }



    	include_once("index.html");
        mysqli_close($link);

?>

?>
