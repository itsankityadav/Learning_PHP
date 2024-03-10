<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = min(123,113,12,124,233,34,25,23,12,432);
        echo $a."<br>";
        $b = max(2,231,4332,1,2,235,214,436,36,224,6437);
        echo $b;
        $c = abs(-23);
        $d = ceil(124.34);
        $e = floor(12.325);
        $f = round(214.5);
        echo $c."<br>".$d."<br>".$e."<br>".$f;
    ?>
</body>
</html>