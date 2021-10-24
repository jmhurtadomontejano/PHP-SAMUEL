<?php
require 'modelos/ConexionBD.php';
require 'modelos/Articulo.php';
require 'modelos/Foto.php';
require 'modelos/Usuario.php';
require 'modelos/UsuarioDAO.php';
$error='';
if(isset($_GET['e']) && $_GET['e']==1){
    $error='Usuario o password incorrectos';
}

?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <header>
            <form id="login" action="login.php" method="post">
                <div id="error_login"><?= $error ?></div>
                <input type="text" placeholder="email" name="email">
                <input type="password" placeholder="password" name="password">
                <input type="submit" value="login">
                <a href="registrar.php">registrar</a>
            </form>
        </header>
        <main>
            
        </main>
    </body>
</html>
