<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="0.5">
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

        <table>
            <?php
            for ($j = 0; $j <= 10; $j++):
                ?>
                <tr>
                <?php
                for ($i = 0; $i <= 10; $i++):
                    $rojo = rand(0, 255);
                    $verde = rand(0, 255);
                    $azul = rand(0, 255);
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
