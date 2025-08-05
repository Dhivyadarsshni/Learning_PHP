<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- writing php inside html body -->
    <?php
    //writing html code inside php
        echo "<h3> Hello World</h3>";
        echo "<hr>";
        $name = "Dhivyadarsshni";
        //{ } is a placeholder , optional but it is a good practice
        echo "Hello $name ,<br> This is my first program in php <br>";
        echo "Learning php is easy <br><br>";

    //learning comments

    //  1)single line comment in php

    /*
        2)this
        is 
        multi-line
        comment
        in php
    */

    $age = 21;
    $email ="dhivya@hotmail.com";
    echo "Hii {$name} <br> You are {$age} years old <br> Your mail id is {$email}";

    
?>
</body>
</html>