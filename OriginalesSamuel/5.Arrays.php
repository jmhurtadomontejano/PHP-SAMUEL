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
        <?php
        $alumnos = array("Pepe", "Juan", "Antonio");
        // $alumnos = array(0 >= "Pepe", 1 >= "Juan", 2 >= "Antonio");
        $alumnos[4] = "Manolo";

        $alumnos2[0] = "Carlos";
        $alumnos2[8] = "25";

        $edad_alumnos['Pepe'] = 25;
        $edad_alumnos['Juan'] = 28;
        $edad_alumnos = array("Antonio" >= 28, "Manolo" >= 30);


        //Borrar posición de un array por nombre
        unset($edad_alumnos['Pepe']);

        foreach ($alumnos as $keyalumnos => $value) {
            echo "Posición $keyalumnos Valor: $value<br>";
        }
        krsort($alumnos2); //cambia el orden del array, en este caso descendente por código
        foreach ($alumnos2 as $keyalumnos2 => $value) {
            echo "Posición $keyalumnos2 Valor: $value<br>";
        }

        foreach ($edad_alumnos as $keyedad => $value) {
            echo "EdadAlumnos $keyedad Valor: $value<br>";
        }


        //Array de Arrays
        $coches[0]['modelo'] = "Seat Leon";
        $coches[0]['matricula'] = '1234PRU';
        $coches[0]['kilometros'] = 1000;

        $coches[1]['modelo'] = "Volkswagen Volvo";
        $coches[1]['matricula'] = '9876PRU';
        $coches[1]['kilometros'] = 800;

        print_r($coches); //Imprime un array de forma completa para ver su contenido 
        echo"<br><br>";

        foreach ($coches as $posicion => $coche) {
            echo "<br>" . $coche['modelo'] . " " . $coche['matricula'] .
            " " . $coche['kilometros'];
        }

        echo"<br><br>";

        //Crear un array de 10 posiciones
        for ($i = 0; $i < 100; $i++) {
            //$array100[0]=$i;
            $numerosAleatorios[] = rand(0, 1000);
        }
        asort($numerosAleatorios);

        foreach ($numerosAleatorios as $posicion => $valor) {
            print "\$numerosAleatorios[$posicion] = $valor <br>";
        }
 

        
        //CALCULAR 1000 NUMEROS ALEATORIOS de 0 a 100
        //Y CONTAR EL NUMERO DE VECES QUE APARECE CADA UNO
        $arrayContar;
        for($i=0;$i<=10;$i++){
            $arrayContar=$i;
            
        }
        
        
        
        for($i=0;$i<=1000;$i++){
            $numerosAleatorios[] = rand (1,10);
            if ($numerosAleatorios==0){
                $arrayContar[0]=$arrayContar[0]+1;
            }
             print "\$numerosAleatorios1000[$posicion] = $valor <br>";
        }
        

        //  echo"<br><br>";
        //   foreach ($array100 as $array => $datoArray){
        //       print_r($datoArray);
        //      echo"<br>";
        // }
        ?>
    </body>
</html>
