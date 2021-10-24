<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /*  put your code here */
        print "Hola mundo";
        
        $nombre = "pepe";
        $numero="5";
        $suma=$numero+20;
        
        echo "<br>La suma tiene el valor: " . $suma;
        echo "<br>La suma tiene  el valor: $suma";
        echo '<br>La suma tiene el valor: $suma';
        echo '<br>Dentro de las comillas simples puedo poner comillas dobles'
        . 'por ejemplo en HTML <span style="color:red">rojo</span><br>';
        
        $numero="hola";
        var_dump($numero);
        echo "<br>";
        $numero=44;
        var_dump($numero);
        print"<br><br>";

        $nombre_completo = "Martín González, Pepe";
        $nombre_completo2 = "Ortega Perez, Marta";
        
        $posicion_coma=strpos($nombre_completo,',');
        
        $nombre= substr($nombre_completo,$posicion_coma+2);
        $apellidos= substr($nombre_completo,0,$posicion_coma); 
        
        $array = explode(", ", $nombre_completo);
        $nombre=$array[1];
        $apellidos=$array[0];

        
        echo "El nombre es $nombre y los apellidos $apellidos<br>";
        
        define("MYSQL_USER",'root');
        
        echo "El usuario de la base de datos es " . MYSQL_USER ."<br>";
        
        ?>
    </body>
</html>
