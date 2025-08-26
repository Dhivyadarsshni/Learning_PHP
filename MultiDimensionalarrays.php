<?php

# Declaring an 2D Array
# ==============================
echo "<h3>Declaring an 2D Array</h3>";

$matrix=[
    [1,2,3],
    [4,5,6],
    [7,8],
];

print_r($matrix);

echo"<br>";

echo "<b>matrix[0][0] :</b> ".  $matrix[0][0]. "<br>"; 
echo "<b>matrix[1][2] :</b> ". $matrix[1][2] . "<br>"; 
echo "<b>matrix[2][1] :</b> " .$matrix[2][1] . "<br>";

# Declaring an Associative Multi Dimensional Array
# ==============================
echo "<h3>Declaring an Associative Multi Dimensional Array</h3>";

$students_record =[
            "Arun"=>["Maths"=>95,"Science"=>97,"English"=>96],
            "Nivedha"=>["Maths"=>97,"Science"=>98,"English"=>93],
            "Karishma"=>["Maths"=>100,"Science"=>95,"English"=>98],

];
//printing on order
foreach ($students_record as $name => $marks) { //assuming the bigger array $students_record into two smaller arrays $name => $marks
    echo "<b>Student:</b> <i>{$name}</i> <br>";
    foreach ($marks as $subject => $score) { //breaking the $marks array into two smaller arrays $subject => $score
        echo "<b>{$subject}:</b> {$score} <br>";
    }
    echo "<br>";
}

//accessing an particular element
echo "<b>Karish's Maths Mark: </b>". $students_record["Karishma"]["Maths"];