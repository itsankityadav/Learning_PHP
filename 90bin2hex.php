<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = "Hello World";
        $b = bin2hex($a);
        echo $b;
        echo hex2bin($b);
    ?>
</body>
</html>