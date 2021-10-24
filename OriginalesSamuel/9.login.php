<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    //Hacer una pantalla de logue y que compruebe si es correcto o No, Si el usuario es correcto escribir CORRECTO, sino escribir INCORRECTO

    
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="9.comprobar.php">
            <input type="email" name="email" placeholder="Email..."><br>
            <input type="password" name="password" placeholder="Contraseña..."><br>
            <input type="submit" value="login">
        </form>
    </body>
</html>

/**/