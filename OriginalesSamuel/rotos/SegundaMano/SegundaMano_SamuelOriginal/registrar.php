<?php

require 'modelos/ConexionBD.php';
require 'modelos/Articulo.php';
require 'modelos/Foto.php';
require 'modelos/Usuario.php';
require 'modelos/UsuarioDAO.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $usuario = new Usuario();
    $usuario->setEmail($_POST['email']);
    $usuario->setNombre($_POST['nombre']);
    $usuario->setPassword(password_hash($_POST['password'], PASSWORD_DEFAULT));
    
    $usuDAO = new UsuarioDAO(ConexionBD::conectar());
    $usuDAO->insert($usuario);
    
    //header('Location: index.php?m=1');
    die();
}

?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="registrar">
            <input type="button" value="volver" onclick="location.href='index.php'">
        </form>
    </body>
</html>
