<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = TRUE;
        $y = FALSE;
        $z=($x or $y);
        var_dump($z);
    ?>
</body>
</html>