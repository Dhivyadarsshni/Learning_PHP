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
    <br>
    <hr>
    <form action = "earningGETPOST.php" method="post">
        <label>Username: </label><br>
        <input type = "text" name = "name" ><br>

        <label>Password</label><br>
        <input type = "password" name ="password"> <br>

        <input type = "submit" value = "Log In"><br>
    </form>
</body>
</html>

<?php

/*
Forms submit data only when you press the submit button.
Until then, PHP doesn’t know about the form fields.

So, without isset(), PHP might try to access something
that isn’t there yet, causing a warning.
*/

// Handle GET form (first form)
if (isset($_GET["username"]) && isset($_GET["pass"])) {
    echo "GET Username: " . $_GET["username"] . "<br>";
    echo "GET Password: " . $_GET["pass"] . "<br>";
}
else {
    echo "Please enter your credentials. <br>";
}

// Handle POST form (second form)
if (isset($_POST["name"]) && isset($_POST["password"])) {
    echo "POST Username: " . $_POST["name"] . "<br>";
    echo "POST Password: " . $_POST["password"] . "<br>";
}
else {
    echo "Please enter your credentials. <br>";
}

?>