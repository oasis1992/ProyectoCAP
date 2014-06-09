
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Registro de clientes</title>
		<meta charset="UTF-8">
		<meta name=description content="">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
			
	</head>
	<body>
		<h1 class="text-center">Registro de Datos</h1>
		

		   <header>
           

<nav class="navbar navbar-default" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->

 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al mini1izar la barra -->
  <div class="collapse navbar-collapse navbar-ex2-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.html">Clientes</a></li>
      <li><a href="empleados.html">Empleados</a></li>
      <li><a href="supervisores.html">Supervisores</a></li>
      <li class="dropdown">
        
        <ul class="dropdown-menu">
          <li><a href="#">Acción #1</a></li>
          <li><a href="#">Acción #2</a></li>
          <li><a href="#">Acción #3</a></li>
          <li class="divider"></li>
          <li><a href="#">Acción #4</a></li>
          <li class="divider"></li>
          <li><a href="#">Acción #5</a></li>
        </ul>
      </li>
    </ul>
 
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">


        <input type="text" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
 
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Servicios</a></li>
      <li><a href="#">Acerca</a></li>
            
      
    </ul>
  </div>
</nav>


        </header> 

		<div class="container" >


	
		</div>

	 
		

<?php 



  $con = mysqli_connect("localhost","root","","registro");


  $result = mysqli_query($con,"SELECT * FROM empleado");

echo "<table border='1'>

<tr>
<th>id</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Direccion</th>
<th>Telefono</th>
<th>Email</th>
<th>Puesto</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['id_empleado'] . "</td>";
  echo "<td>" . $row['nombre'] . "</td>";
  echo "<td>" . $row['apellido'] . "</td>";
  echo "<td>" . $row['direccion'] . "</td>";
  echo "<td>" . $row['telefono'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['puesto'] . "</td>";


  echo "</tr>";
}

echo "</table>";


 ?>



			

		
					
		</div>
	</body>
</html>