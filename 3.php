<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Hola Mundo</title>
	</head>
	<body>
	        <?php
                $sum = 0;
                $i = 1;
                while ($i <= 50) {
                    $multi = $i * $i;
                    echo $i " al cuadrado :" $multi;
                    $sum += $multi;
                    $i++;
                }
                echo "Total de cuadrados : " $sum;
			?>
	</body>
</html>
