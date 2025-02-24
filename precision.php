<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $angel = 1.75;
        $antonio = 1.87;
        $diferencia = 0.10;

        if (abs($angel - $antonio) > $diferencia) {
            echo "true";
        } else {
            echo "false";
        }
    ?>
</body>
</html>