<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Hola Mundo</title>
	</head>
	<body>
	        <?php
                function es_par($numero) {
                    if ($numero % 2 === 0) {
                        echo "Par";
                    } else {
                        echo "Impar";
                    }
                }
                echo .es_par(4);
			?>
	</body>
</html>