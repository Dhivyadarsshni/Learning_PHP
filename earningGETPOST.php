<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Creating an simple form for accessing credentials -->
    <form action = "earningGETPOST.php" method="get">
        <label>Username: </label><br>
        <input type = "text" name = "username" ><br>

        <label>Password</label><br>
        <input type = "password" name ="pass"> <br>

        <input type = "submit" value = "Log In"><br>
    </form>
</body>
</html>

<?php
    echo $_GET["username"]."<br>";

    echo $_GET["pass"]."<br>";

?>