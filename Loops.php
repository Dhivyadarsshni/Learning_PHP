<?php
#Types of Loops
echo "<h1>Types of Loops</h1>";
#1. For Loop
echo "<h2>1. For Loop</h2> <hr/>" ;

#printing time
for($i=0; $i<=24; $i++){
    if($i<10){
        echo "The time is 0".$i.".00 IST  || " ;
    }else{
        echo "The time is ".$i.".00 IST || " ;  
    }
}
#2. While Loop
echo "<h2>2. While Loop</h2> <hr/>" ;

#printing numbers 1 - 21
$j=1;

while($j<=21){
    echo $j ." ";
    $j++;
}

#3. Do While Loop
echo "<h2>3. Do While Loop</h2> <hr/>" ;

#printing an value once even w/o checking the condition

$bool = true; // initialize

do {
    echo "Running...<br>";
    $bool = false; // change condition to stop
} while($bool);

#4. For each Loop
echo "<h2>4. For each Loop</h2> <hr/>" ;

echo "<u><b>Indexed array:</b></u>";

$fruits = ["Apple","Banana","Orange"];

echo "<br>";

foreach($fruits as $fruit){
    echo "This is a/an {$fruit} || ";
}

echo "<br>";

echo "<u><b>Associative array:</b></u>";

$flowers = array("Lily"=>"White", "Tulip"=>"Pink","Sunflower"=>"Yellow");

echo "<br>";

foreach($flowers as $flower => $color){
    echo "This is {$flower}. It is {$color} in color || ";
}

