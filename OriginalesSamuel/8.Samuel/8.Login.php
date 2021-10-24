<?php
    $errores="";
    $error = false;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        session_start();
        
        $nombre = $_POST['nombre'];
        $password = $_POST['password'];
        $conn = new mysqli('localhost', 'root', '', 'agenda');
        
        if($conn->connect_error){
            die("Conexión fallida: " . $conn->connect_error);
        }
        
        $sql = "select nombre, password from usuarios";
        if(!$result = $conn->query($sql)){
            die("Error al ejecutar la consulta: " . $conn->error);
        }

        $usuarios = $result->fetch_all(MYSQLI_ASSOC);
        
        foreach ($usuarios as $usu) {
            if($usu['nombre'] == $nombre && password_verify($password, $usu['password']) == true){
                $_SESSION['usuario'] = $nombre;
                header('location: 8.Logeado.php');
            }else{
                $error = true;
                $errores="Login incorrecto";
            }
        }
    }
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
        <style>
            h1{
                text-align: center;
            }
            .container{
                width: 100%;
            }
            .container input{
                box-sizing: border-box;
                display: block;
                padding: 5px;
                margin: 5px auto 10px auto;
                width: 50%;
            }
            .error{
            background: #FF5C58;
            display: flex;
            width: 30%;
            margin: auto;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .error p{
            box-sizing: border-box;
            width: 50%;
            text-align: center;
            border-bottom: 1px solid white;
            color: white;
        }
        </style>
    </head>
    <body>
        <h1>LOGIN</h1>
        <div class="container">
             <?php if($error): ?>
        <div class="error">
               <p> <?= $errores; ?> </p>
        </div>
            <?php endif; ?>
            <form action="" method="post">
                <input type="text" name="nombre" value="<?php if(isset($nombre)) echo $nombre?>"  placeholder="Nombre">
                <input type="password" name="password" value=""  placeholder="Contraseña">
                <input type="submit" value="LOGIN">
            </form>
        </div>
    </body>
</html>
