<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Hola Mundo</title>
	</head>
	<body>
	        <?php
                $n = 1;
                for ($i = 1 ; $i <= 10 ;$i ++) {
                    $multi = $n * $i;
                    echo "$n x $i = $multi <br>";
                }
			?>
	</body>
</html>
