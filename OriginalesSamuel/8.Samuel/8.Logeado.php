<?php
    session_start();
    if(empty($_SESSION['usuario'])){
        header('location: 8.Login.php');
        exit();
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
    </head>
    <body>
        <p>Bienvenido <?=$_SESSION['usuario']?></p>
    </body>
</html>
