<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="" method="post">
            Edad: <input type="text" name="edad" id="edad"><br>
            <input type="submit">
        </form>

        <?php
        //isset devuelve true si la variable existe (si se ha enviado el formulario...)
        if (isset($_POST['edad'])) { 
            $edad = $_POST['edad'];
            if ($edad < 18) {
                echo '<h2 style="color:blue">Eres menor de edad</h2>';
            } elseif ($edad<40) {
                echo "<h2 style=\"color:blue\">Mayor de edad</h2>";
            } else{
                echo "<h2 style=\"color:blue\">Entrado en años...</h2>";
            }
        }
        ?>
    </body>
</html>
