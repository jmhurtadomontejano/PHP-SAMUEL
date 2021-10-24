<?php

require 'modelos/ConexionBD.php';
require 'modelos/Articulo.php';
require 'modelos/Foto.php';
require 'modelos/Usuario.php';
require 'modelos/UsuarioDAO.php';

//Obtendo el usuario, si no existe vuelvo a index con un parámetro de error
$usuDAO = new UsuarioDAO(ConexionBD::conectar());
if (!$usuario = $usuDAO->findByEmail($_POST['email'])) {    
    //Usuario no encontrado
    header('Location: index.php?e=1');
    die();
}
//Compruebo la contraseña, si no existe vuelvo a index con un parámetro de error
if (!password_verify($_POST['password'], $usuario->getPassword())) {
    //password incorrecto
    header('Location: index.php?e=1');
    die();
}
//Usuario y password correctos, redirijo al listado de anuncios
header("Location: listado_anuncios.php");
die();
