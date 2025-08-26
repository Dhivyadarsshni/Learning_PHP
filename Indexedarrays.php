<?php
/*

What is an Array in PHP?

-An array is a special variable that can hold multiple values under a single name.

-Instead of creating many variables, we store all values in one array and access them with keys

Two types of array:

1.Indexed Arrays(Non Associative)
2.Associative Arrays(keys)
3.Multi Dimensional Arrays

*/

//Indexed Arrays

    //$flowers=array("Tulip","Daisy","Sunflower");

$flowers=[  "Tulip",
            "Daisy",
            "Sunflower"
        ];

//add element at the last
$flowers[] ="Chrysanthemum";

//add element using built-in function (at last)
array_push($flowers,"Lotus");
print_r($flowers);
echo "<br>";

//remove element using built-in function (at last)
array_pop($flowers);
print_r($flowers);
echo "<br>";

//print by index
echo $flowers[3];
echo "<br>";

//print all
print_r($flowers);
echo "<br>";

//replace element in the array
$flowers[1]="Lily";

echo $flowers[1];
echo "<br>";

//remove element in the array

unset($flowers[3]); //shows error when tried to access the same position element

echo $flowers[3];
echo "<br>";

//remove the position permanently

$flowers[3]="Chrys";

array_splice($flowers,-1,1);

print_r($flowers);
echo "<br>";

//array information

echo "count by count()= " . count($flowers). "<br>";

echo "count by sizeof()= " . sizeof($flowers);
