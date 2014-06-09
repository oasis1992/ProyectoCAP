<?php


	$con=mysqli_connect("localhost","root","","registro");
	$id = $_POST['id'];
// Check connection
	if (mysqli_connect_errno()) {

?>


            <script type="text/javascript">
                 alert("No se elimino el Supervisor correctamente");
                 history.back();
             </script>
<?php

	}else{


			mysqli_query($con,"DELETE FROM supervisor WHERE id_supervisor= '".$id."'");

			mysqli_close($con);

?>
			<script type="text/javascript">
                 alert("Si se elimino el supervisor correctamente");
                 history.back();
             </script>

<?php             
include_once("supervisores.html");
}

?>