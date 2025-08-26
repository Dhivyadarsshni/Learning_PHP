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

echo " Array original: " ; print_r($flowers);
echo "<br>";echo "<br>";

//add element at the last
echo "Added element at last: ";
$flowers[] ="Chrysanthemum";
print_r($flowers);
echo "<br>";echo "<br>";

//add element using built-in function (at last)
echo "Used array_push () :";
array_push($flowers,"Lotus");
print_r($flowers);
echo "<br>";echo "<br>";

//remove element using built-in function (at last)
echo "Used array_pop() :";
array_pop($flowers);
print_r($flowers);
echo "<br>";echo "<br>";

//print by index
echo "Index 3: " . $flowers[3];
echo "<br>";echo "<br>";

//print all
echo "All flowers at once: ";
print_r($flowers);
echo "<br>";echo "<br>";

//replace element in the array
$flowers[1]="Lily";

echo "Index 1 after replaced : ". $flowers[1];
echo "<br>";echo "<br>";

//remove element in the array

unset($flowers[3]); //shows error when tried to access the same position element

echo $flowers[3];
echo "<br>";echo "<br>";

//remove the position permanently

$flowers[3]="Chrys";

array_splice($flowers,-1,1);
echo "used array_splice(): ";
print_r($flowers);
echo "<br>";echo "<br>";

//array information

echo "count by count()= " . count($flowers). "<br>";echo "<br>";

echo "count by sizeof()= " . sizeof($flowers);

echo "<br>";echo "<br>";

//split arrays
$numbers = [1,2,3,4,5,6,7,8,9,10];

//start from a separate the first number - index and finish after the 2nd value of elements
echo "used array_splice()";
print_r(array_splice($numbers,3,6));
echo "<br>";echo "<br>";

//extract a separate portion
echo "used array_slice()";
print_r(array_slice($numbers,1,2));
echo "<br>";echo "<br>";
/*
Sorting built in functions:

    //For indexed:

        sort($arr) → Ascending sort (values).

        rsort($arr) → Descending sort (values).

    //For Associative and multi dimensional:

        asort($arr) → Sort associative by values.

        ksort($arr) → Sort associative by keys.

        arsort($arr) → Descending sort by values.

        krsort($arr) → Descending sort by keys.
*/

//sorting

sort($flowers);

echo "Sorted in ascending order: ";
print_r($flowers);
echo "<br>";echo "<br>";

//reversing

echo "Reversed order: ";
print_r(array_reverse($flowers));
echo "<br>";echo "<br>";

//searching
echo "Searching a particular element: ";
echo in_array("Lily",$flowers)? "Lily found" : "Bad luck";
echo "<br>";
