<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Coffee Machine</title>
</head>
<body>

    <h2>Welcome to StarMoney Coffee</h2>
    <hr>
    <form action="controlStructures.php" method="POST">
        <label>Enter your name:</label> 
        <input type="text" name ="name" placeholder="first name">
        <p>
            <b>Menu:</b><br>
            Hot Coffee : 40 Rs <br>
            Americano : 100 Rs<br>
            Cold Coffee : 120 Rs<br>
            Cappucino : 150 Rs<br>
            Latte : 160 Rs <br>

        </p>

        <label>What type of coffee you want ?</label><br>
        <select name="coffeeType">
            <option value="normal">Normal Hot Coffee</option>
            <option value="americano">Americano</option>
            <option value="cappucino">Cappucino</option>
            <option value="latte">Latte</option>
            <option value="cold coffee">Cold Coffee</option>
        </select>


        <br><br>
        <label>Enter the money to pay: </label>
        <input type="text" name="money" placeholder="Money in Rupees">

        <br><br>
        <button type="submit">Order Coffee</button>
    </form>

</body>
</html>
<?php

if($_SERVER["REQUEST_METHOD"]==="POST"){

    
    if(empty($_POST["name"]) || empty($_POST["coffeeType"])|| empty($_POST["money"]) ){
       echo "Welcome to StarMoney , please check that you have filled all details correctly";
       exit();
    }

    $name = $_POST["name"];
    $coffeeType = $_POST["coffeeType"];
    $money = $_POST["money"];
    $price =0;


    //switch case
    switch($coffeeType)
    {
         case "normal":
            $price = 40;
            break;
        case "americano":
            $price = 100;
            break;
        case "cold coffee":
            $price = 120;
            break;
        case "cappucino":
            $price = 150;
            break;
        case "latte":
            $price = 160;
            break;
        default:
            $price = 0;
            echo "Invalid coffee selection.";
            exit;

    }

    //if - else 
    if ($money >= $price) {
        $change = $money - $price;
        echo "Hi $name, your $coffeeType order is confirmed!<br>";
        echo "Payment successful. Your change: Rs. $change<br>";
    } else {
        $short = $price - $money;
        echo "Hi $name, you need Rs. $short more to buy $coffeeType.";
        exit;
    }


    //match 
    $prepTime = match($coffeeType) {
        "normal" => 2,
        "americano" => 3,
        "cold coffee" => 4,
        "cappucino" => 5,
        "latte" => 4,
        default => 0
    };

    echo "Please wait $prepTime minutes. Enjoy your coffee! ☕";

}


?>