<?php
//Nos conectamos a MySQL
$conn = new mysqli('localhost', 'root', '', 'agenda');
//Comprobamos si hay error de conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
/*
  //Guardamos la consulta en una variable y la ejecutamos
  $sql = "insert into usuarios values (null, 'samuel@iesjuanbosco.es','1234','samuel','2000/12/1')";
  if(!$conn->query($sql)){
  die("Error al ejecutar la consulta: " . $conn->error);
  }
  //Modificar todos los usuarios y ponerles el password en blanco
  $sql = "update usuarios set password='' where id>1";
  if(!$conn->query($sql)){
  die("Error al ejecutar la consulta: " . $conn->error);
  }
 */
//Borrar todos los usuarios que tengan un id superior a 1 e imprimir el número de usuarios borrados
/* $sql = "delete from usuarios where id>1";
  if(!$conn->query($sql)){
  die("Error al ejecutar la consulta: " . $conn->error);
  }
  print "Se han borrado " . $conn->affected_rows . "usuarios.<br>";
 */

//Obtenemos un usuario con fetch_assoc
$sql = "select * from usuarios where id=1";
if (!$result = $conn->query($sql)) {
    die("Error al ejecutar la consulta: " . $conn->error);
}
$usuario = $result->fetch_assoc(); //Devuelve una fila de la query en un array asociativo.
//Obtenemos varios usuarios
$sql = "SELECT id, nombre,email, password, "
        . "DATE_FORMAT(fecha_nacimiento,'%e/%c/%Y') as fecha_nacimiento FROM `usuarios`";
if (!$result = $conn->query($sql)) {
    die("Error al ejecutar la consulta: " . $conn->error);
}
$usuarios = $result->fetch_all(MYSQLI_ASSOC); //Devuelve un array de dos dimensiones (filas y campos)
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://use.fontawesome.com/2a534a9a61.js"></script>
        <style type="text/css">
            .icono-color{
                color:#777;
                transition: all 0.5s;
            }
            .icono-color:hover{
                color:#007;
            }
            
        </style>
    </head>
    <body>
        <h3>Select de un registro de la BBDD</h3>
        Id:  <?= $usuario['id'] ?><br>
        Usuario: <?= $usuario['nombre'] ?><br>
        email: <?= $usuario['email'] ?><br>
        password: <?= $usuario['password'] ?><br>
        Fecha de nacimiento: <?= $usuario['fecha_nacimiento'] ?><br>

        <h3>Select de varios registros de la BBDD</h3>
        <?php foreach ($usuarios as $u): ?>
            <div> <?= $u['nombre'] ?> - <?= $u['email'] ?> - <?= $u['fecha_nacimiento'] ?> <a href="8.borrar.php?id_usuario=<?= $u['id'] ?>"><i class="icono-color fa fa-trash" aria-hidden="true"></i></a> <a href="8.editar_usuario.php?id=<?=$u['id']?>"><i class="icono-color fa fa-pencil" aria-hidden="true"></i></a></div>
        <?php endforeach; ?>

        <a href="8.insertar_usuario.php">Insertar usuario</a>
    </body>
</html>

<?php
/*
 * Añadir un enlace "insertar usuario" que cargue la página 8.add_usuario.php 
 * que contenga un formulario con todos los campos relativos a la tabla usuario
 * de la base de datos (email, nombre, password, fecha_nacimiento). Al enviar el 
 * formulario se deben insertar los datos en la base de datos y redirigir a 8.mysql.php
 */
?>