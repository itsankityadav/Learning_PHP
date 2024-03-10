<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = "I am Ankit <br>Yadav</br>";
        $b = "I am Ankit Yadav";
        echo $a."<br>";
        echo strip_tags($a)."<br>";
        echo wordwrap($b,3,"<br>",true);
    ?>
</body>
</html>