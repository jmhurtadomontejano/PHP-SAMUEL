<html>
<?php 
	//if (isset($_POST["email"])) {
		/*el profesor tiene */ 
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$conn = new mysqli('localhost', 'root', '', 'agenda');
		//Comprobamos si hay error de conexión
		if ($conn->connect_error) {
    	die("Error de conexión: " . $conn->connect_error);
		}

//Guardamos la consulta en una variable y la ejecutamos
	$sql = "insert into usuarios values (null,'{$_POST["usuario"]}','{$_POST["email"]}','{$_POST["password"]}','{$_POST["fecha_nacimiento"]}')";

			if(!$conn->query($sql)){
    			die("Error al ejecutar la consulta: " . $conn->error);
			}
			else{
				header("location:8.mysql.php");
			}
	}
?>
	<form action="8.add_usuario.php" method="POST">
		<label for="email">Email</label>
		<input id="email" type="email" name="email" placeholder="Introduce aqui tu email">
		<br>
		<label for="usuario">Usuario</label>
		<input id="usuario" type="text" name="usuario" placeholder="Usuario">
		<br>
		<label for="password">Contraseña</label>
		<input id="password" type="password" name="password" placeholder="Contraseña">
		<br>
		<label for="fecha_nacimiento">Fecha Nacimiento</label>
		<input id="fecha_nacimiento" type="date" name="fecha_nacimiento">
		<br>
		<button>Guardar</button>

	</form>
</html>