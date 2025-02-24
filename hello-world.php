<!DOCTYPE html>
<html lang="esp">
    <body>
        <?php
            $name = "Antonio Manuel Prieto Villalba";
            echo "Hola soy " . $name . " y estudio en el instituto IES Poligono Sur";
            echo "<br><br>";
            var_dump($name);
            echo "<br><br>";

            $hab = 14000;
            echo "Soy de Estepa la cual tiene " . $hab;
            echo "<br><br>";
            var_dump($hab);
            echo "<br><br>";

            $soy = true;
            echo "¿Soy de estepa? " . ($soy ? 'Sí' : 'No');
            echo "<br><br>";
            var_dump($soy);
        ?>
    </body>
</html>