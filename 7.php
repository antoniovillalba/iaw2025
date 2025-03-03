<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Hola Mundo</title>
	</head>
	<body>
	        <?php
                function calculadora($num1 , $num2 , $calc) {
                    switch ($calc) {
                        case '+':
                            return $num1 + $num2;
                        case '-':
                            return $num1 - $num2;
                        case '*':
                            return $num1 * $num2;
                        default:
                            return "Opcion invalida";
                    }
                }
                echo .calculadora(2,3,'+');
			?>
	</body>
</html>
