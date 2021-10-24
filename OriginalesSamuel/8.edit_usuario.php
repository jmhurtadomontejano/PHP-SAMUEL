<?php
$id= '';
$nombre = '';
$email = '';
$fecha_nacimiento = '';
$password = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') { //Si se ha enviado el formulario
    $error = false;

    //Insertamos el usuario en la BD
    $conn = new mysqli('localhost', 'root', '', 'agenda');
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $password = $_POST['password'];

    //Validación de datos
    if (empty($nombre) || empty($email) ||
            empty($fecha_nacimiento) || empty($password)) {
        $error = true;
    } else {

        $sql = "update usuarios set nombre='$nombre', email='$email',password='$password', fecha_nacimiento='$fecha_nacimiento' where id=$_GET[id]";
        if (!$conn->query($sql)) {
            die("Error al ejecutar la consulta: " . $conn->error);
        }
        //Redirigimos al listado ( 8.mysql.php )
        header('Location: 8.mysql.php');
    }
        $nombre = $result->fetch_assoc(); //Obtiene una fila del resultado
    
    $nombre = $nombre['nombre'];
    $email = $usuario['email'];
    $fecha_nacimiento = $usuario['fecha_nacimiento'];
    $password = $usuario['password'];
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="">
            <input type="text" name="id" placeholder="Id" value="<?= $id ?>"><br>            
            <input type="text" name="nombre" placeholder="Nombre..." value="<?= $nombre ?>"><br>
            <input type="email" name="email" placeholder="Email..." value="<?= $email ?>"><br>
            <input type="password" name="password" placeholder="Contraseña..." value="<?= $password ?>"><br>
            <input type="date" name="fecha_nacimiento" value="<?= $fecha_nacimiento ?>"><br>
            <input type="submit" value="Editar usuario">
        </form>
    </body>
</html>
