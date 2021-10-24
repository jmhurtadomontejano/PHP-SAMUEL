<?php
//Nos conectamos a MySQL
$conn = new mysqli('localhost', 'root', '', 'agenda');
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
$sql = "delete from usuarios where id = " . $_GET['id_usuario'];
if(!$conn->query($sql)){
    die("Error al ejecutar la consulta: " . $conn->error);
}

//Redirige a 8.mysql.php
header('Location: 8.mysql.php');
