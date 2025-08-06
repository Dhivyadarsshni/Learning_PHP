<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal></title>
</head>
<body>
    <h2>Welcome to Student portal </h2>
    <hr>
    <h2>Enter your details:</h2><br>
    <form action = "gradeTracker.php" method = "post">
        <label>Student Name:</label><br>
        <input type = "text" name ="name"><br>

        <label>Subject name: </label><br>
        <input type = "text" name ="subject"><br>

        <label>Marks Scored: </label><br>
        <input type = "text" name = "marks"><br>

        <label>Total Marks: </label><br>
        <input type = "text" name = "total"><br>


        <input type = "submit" name="calculate" value="Calculate">
    </form>
    <hr>
</body>
</html>
<?php
    if(isset($_POST["calculate"])){
        $name = $_POST["name"];
        $subject = $_POST["subject"];
        $marks = $_POST["marks"];
        $total = $_POST["total"];

        $percentage = 0;

        $percentage = ($marks/$total)*100;

        $grade =" ";

        if($percentage>=90){
            $grade = "O";
        
        }elseif($percentage>=80){
            $grade ="A+";
        }elseif($percentage>=70){
            $grade ="A";
        }elseif($percentage>=60){
            $grade ="B+";
        }
        elseif($percentage>=50){
            $grade ="B+";
        }else{
            $grade="Failed";
        }

        echo "<h3>Report Card 📋</h3>";
        echo "Student: $name <br>";
        echo "Subject: $subject <br>";
        echo "Marks: $marks / 100<br>";
        echo "Grade: $grade";
    }
?>