<?php
$id= '';
$nombre = '';
$email = '';
$fecha_nacimiento = '';
$password = '';

$conn = new mysqli('localhost', 'root', '', 'agenda');
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') { //Cuando se envíe el formulario entramos aquí
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $password = $_POST['password'];

    //Validación de datos
    if (empty($nombre) || empty($email) || empty($fecha_nacimiento)) {
        $error = true;
    } else {
        //Si el password está en blanco en la SQL no lo modifico.
        if (empty($password)) {
            $sql = "update usuarios set nombre='$nombre', email='$email',fecha_nacimiento='$fecha_nacimiento' WHERE id=$_GET[id]";
        } else {
            $password=password_hash($password,PASSWORD_BCRYPT);
            $sql = "update usuarios set nombre='$nombre', email='$email',password='$password',fecha_nacimiento='$fecha_nacimiento' WHERE id=$_GET[id]";
        }
        if (!$conn->query($sql)) {
            die("Error al ejecutar la consulta: " . $conn->error);
        }
        //Redirigimos al listado ( 8.mysql.php )
        header('Location: 8.mysql.php');
    }
} else {  //Aquí entramos la primera vez que cargamos la página (antes de enviar el formulario)
    $sql = "select * from usuarios where id=$_GET[id]";
    if (!$result = $conn->query($sql)) {
        die("Error al ejecutar la consulta: " . $conn->error);
    }

    $usuario = $result->fetch_assoc(); //Obtiene una fila del resultado
    $nombre = $usuario['nombre'];
    $email = $usuario['email'];
    $fecha_nacimiento = $usuario['fecha_nacimiento'];
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="">
            <input type="text" name="nombre" placeholder="Nombre..." value="<?= $nombre ?>"><br>
            <input type="email" name="email" placeholder="Email..." value="<?= $email ?>"><br>
            <input type="password" name="password" placeholder="Escribe para modificarla" ><br>
            <input type="date" name="fecha_nacimiento" value="<?= $fecha_nacimiento ?>"><br>
            <input type="submit" value="Actualizar datos de usuario">
        </form>
    </body>
</html>
