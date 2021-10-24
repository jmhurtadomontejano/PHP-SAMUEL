<!DOCTYPE html>
<?php
include '4.Funciones.php';
?>


<html>
    <head>
        <meta http-equiv="refresh" content="3">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        for ($i = 0; $i <= 10; $i++) {
            echo "5*$i=" . 5 * $i . "<br>";
        }
        ?>
        <br><br>

        <table><!--tabla con primera linea en blanco porque la asignación de colores empieza despues de mostrar la primera linea-->
            <?php
            for ($j = 1; $j <= 10; $j++):
                ?>
                <tr style="border: 1px solid black; background-color: rgb(<?= $rojo ?>,<?= $verde ?>,<?= $azul ?>); width: 20px; text-align: center">
                    <?php
                    for ($i = 0; $i <= 10; $i++):
                        $rojo = rand(150, 255);
                        $verde = rand(150, 255);
                        $azul = rand(150, 255);
                        ?>
                        <td style=" font-size: 40px">
                            <?= $j * $i ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table <br><br>


        <table>
            <?php
            for ($j = 1; $j <= 10; $j++):
                $rojo = rand(150, 255);
                $verde = rand(150, 255);
                $azul = rand(150, 255);
                ?>
                <tr style="border: 1px solid black; background-color: rgb(<?= $rojo ?>,<?= $verde ?>,<?= $azul ?>); width: 20px; text-align: center">
                    <?php
                    for ($i = 0; $i <= 10; $i++):
                        ?>
                        <td style=" font-size: 40px">
                            <?= $j * $i ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>


        <table>
            <?php
            for ($j = 1; $j <= 10; $j++):
                ?>
                <tr>
                    <?php
                    for ($i = 0; $i <= 10; $i++):
                        $rojo = rand(150, 255);
                        $verde = rand(150, 255);
                        $azul = rand(150, 255);
                        ?>
                        <td style="border: 1px solid black; background-color: rgb(<?= $rojo ?>,<?= $verde ?>,<?= $azul ?>); width: 20px; text-align: center">
                            <?= $j * $i ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>

    </body>
</html>
