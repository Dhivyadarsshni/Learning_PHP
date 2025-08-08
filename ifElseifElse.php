<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Theatre Tickets</title>
</head>
<body>
    <h2>Welcome to DD Movie Theatre</h2>
    <hr>
    <form action="ifElseifElse.php" method = post>
        <label>Enter your name: </label>
        <input type = "text" name="Name" >

        <br><br>


        <label>Enter your age: </label>
        <input type = "number" name="Age" required >

        <br><br>

        <label>Select a day to book tickets:</label>
        <select name ="days" required>
            <option value = "Monday">Monday</option>
            <option value = "Tuesday">Tuesday</option>
            <option value = "Wednesday">Wednesday</option>
            <option value = "Thursday">Thursday</option>
            <option value = "Friday">Friday</option>
            <option value = "Saturday">Saturday</option>
            <option value = "Sunday">Sunday</option>

        </select><br><br>
    
        <input type="submit" name ="calculate" value="Calculate">

    </form>
</body>
</html>
<?php
/*
Write a PHP program that calculates the ticket price for a movie theater based on the customer’s age and whether it’s a weekend.

Rules:

👶 Children (age < 12):

Weekday price: ₹150

Weekend price: ₹200

👨‍🎓 Teenagers (age >= 12 and age < 18):

Weekday price: ₹200

Weekend price: ₹250

🧑 Adults (age >= 18 and age < 60):

Weekday price: ₹250

Weekend price: ₹300

👵 Senior Citizens (age >= 60):

Weekday price: ₹180

Weekend price: ₹220
*/
if (isset($_POST["calculate"])){

    $name = $_POST["Name"];
    $age=$_POST["Age"];
    $day=$_POST["days"];

    $day_segragated=" ";
    $ticket_price =0;

    //Step 1: deciding as weekday or weekend
    switch($day){
        case "Monday":
            $day_segragated ="Weekday";
            break;
        case "Tuesday":
            $day_segragated ="Weekday";
            break;
        case "Wednesday":
            $day_segragated ="Weekday";
            break;
        case "Thursday":
            $day_segragated ="Weekday";
            break;
        case "Friday":
            $day_segragated ="Weekday";
            break;
        case "Saturday":
            $day_segragated ="Weekend";
            break;
        case "Sunday":
            $day_segragated ="Weekend";
            break;
        default:
            $result = "Invalid operation selected!";
    }

    //Step 2: Calculating the ticket price
    if($age<12 && $age>0){
        if($day_segragated=="Weekend"){
            $ticket_price=200;
        }
        else { $ticket_price=150;}
    }
    elseif($age>=12 && $age<18){
        if($day_segragated=="Weekend"){
            $ticket_price=250;
        }
        else { $ticket_price=200;}
    }
    elseif($age>=18 && $age<60){
        if($day_segragated=="Weekend"){
            $ticket_price=300;
        }
        else { $ticket_price=250;}
    }
    elseif($age>=60){
        if($day_segragated=="Weekend"){
            $ticket_price=220;
        }
        else { $ticket_price=180;}
    }
    
    }
    
    echo "<hr>";
    echo "<h2>Your Ticket Details are</h2>";
    echo "<hr>";
    echo "<b>Your Name:</b> {$name}<br>";
    echo "<b>Your Age:</b> {$age} <br>";
    echo "<b>Selected day :</b> <u>{$day}</u>  which is a/an {$day_segragated} and <br>";
    echo "<b>Ticket Price:</b> \${$ticket_price} <br>";
    echo "<hr>";

?>