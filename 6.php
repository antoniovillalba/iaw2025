<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Hola Mundo</title>
	</head>
	<body>
	        <?php
                $mes = ["Enero" , "Febrero" , "Marzo" , "Abril" , "Mayo" , "Junio" , "Julio" , "Agosto" , "Septiembre" , "Octubre" , "Noviembre" , "Diciembre"];
                sort($mes);
                echo implode(", ",$mes);
			?>
	</body>
</html>
