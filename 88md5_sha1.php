<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $password = "Hello ankit";
        $store = md5($password,true);
        echo $store;

        $password1 = "Hello ankit";
        $store1 = sha1($store,true);
        echo $store1;
    ?>
</body>
</html>