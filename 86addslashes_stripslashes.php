<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = "Hello i am 'ankit'";
        $b = addslashes($a);
        echo $b."<br />";
        echo stripslashes($b)."<br />";

        $c = "Hello i am 'ankit'";
        $d = addcslashes($c,"a...zA...Z ");
        echo $d."<br />";
        echo stripslashes($d);
        
        //  The stripslashes() function removes backslashes added by the addslashes() function.
        
        //  The stripcslashes() function removes backslashes added by the addcslashes() function.
        
        //  The addslashes() function returns a string with backslashes in front of predefined characters.
        //  The predefined characters are:
        //      single quote (')    double quote (")    backslash (\)   NULL
        //  Tip: This function can be used to prepare a string for storage in a database and database queries.

        //  The addcslashes() function returns a string with backslashes in front of the specified characters.
        //  Note: The addcslashes() function is case-sensitive.
        //  Note: Be careful using addcslashes() on 0 (NULL), r (carriage return), n (newline), 
        //  f (form feed), t (tab) and v (vertical tab). In PHP, \0, \r, \n, \t, \f and \v are predefined escape sequences.
        //  addcslashes(string,characters)
    ?>
</body>
</html>