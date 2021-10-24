<?php
session_start(); //Permite utilizar variables de sesión

require 'modelos/ConexionBD.php';
require 'modelos/Articulo.php';
require 'modelos/Foto.php';
require 'modelos/Usuario.php';
require 'modelos/UsuarioDAO.php';
require 'modelos/MensajesFlash.php';
require 'modelos/Sesion.php';
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            header{
                border-bottom: 1px solid black;
                overflow: auto;
            }
            #usuario,#login{
                width: 300px;
                float: right;
            }
            #login input{
                margin-top: 3px;
            }
            #titulo{
                margin-right: 300px;
                text-align: center;
            }
            .boton_formulario{
                border:1px solid black;
                box-sizing: border-box;
                display: inline-block;
                padding: 3px;
                background-color: #eee;
                text-decoration: none;
                color:black;
                
            }
            
        </style>
    </head>
    <body>
        <header>
            <?php if (Sesion::existe()): ?>
                <?php
                $usuDAO = new UsuarioDAO(ConexionBD::conectar());
                $usuario = $usuDAO->find(Sesion::obtener());
                ?>
                <div id="usuario"> 
                    <img src="imagenes/<?= $usuario->getFoto() ?>" style="border: 1px solid black; height: 80px; width: 80px; border-radius: 100px">
                    <?= $usuario->getNombre() ?> ( <a href="logout.php">cerrar sesión</a> )
                </div>
            <?php else: ?>
                <form id="login" action="login.php" method="post">
                    <input type="text" placeholder="email" name="email">
                    <input type="password" placeholder="password" name="password"><br>
                    <input type="submit" value="login" class="boton_formulario">
                    <input type="button" onclick="location.href='registrar.php'" value="registrar" class="boton_formulario">
                </form>
            <?php endif; ?>
            <div id="titulo">
                <h1>Segunda Mano</h1>
            </div>            
        </header>
        <main>
            <?php MensajesFlash::imprimir_mensajes(); ?>

        </main>
    </body>
</html>
