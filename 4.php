<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Hola Mundo</title>
	</head>
	<body>
	        <?php
                $sum = 0;
				for ($i=5; $i <= 100 ; $i +=5) {
					echo $i ." ";
					$sum += $i;
				}
				$total = ($sum * $sum);
				echo $total;
			?>
	</body>
</html>
