<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = '<a shref="https://www.w3schools.com">Go to w3schools.com</a>'."<br>";
        $b = htmlentities($a,ENT_QUOTES)."<br>";
        echo $b;
        echo html_entity_decode($b);

        $c = '<a href="https://www.w3schools.com">Go to w3schools.com</a>'."<br>";
        $d = htmlspecialchars($c);
        echo $d;
        echo htmlspecialchars_decode($d);

        echo htmlspecialchars($a)."<br>";
    ?>
</body>
</html>