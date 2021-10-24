<?php
$nombre='';
$email='';
$password='';
$fecha_nacimiento='';
if ($_SERVER['REQUEST_METHOD'] == 'POST') { //Si se ha enviado el formulario
    $error = false;

    $conn = new mysqli('localhost', 'root', '', 'agenda');
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $password = password_hash($_POST['password'],PASSWORD_BCRYPT);

    //Validación de datos
    if (empty($nombre) || empty($email) ||
            empty($fecha_nacimiento) || empty($password)) {
        $error = true;
    } else {

        $sql = "insert into usuarios (nombre,email,password,fecha_nacimiento) "
                . "values ('$nombre','$email','$password','$fecha_nacimiento')";
        if (!$conn->query($sql)) {
            die("Error al ejecutar la consulta: " . $conn->error);
        }
        //Redirigimos al listado ( 8.mysql.php )
        header('Location: 8.mysql.php');
    }
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
            <input type="password" name="password" placeholder="Contraseña..." value="<?= $password ?>"><br>
            <input type="date" name="fecha_nacimiento" value="<?= $fecha_nacimiento ?>"><br>
            <input type="submit" value="Crear usuario">
        </form>
    </body>
</html>
