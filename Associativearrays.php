<?php

# Declaring
# ==============================
echo "<h3>Declaring associative array</h3>";
$princesses = [
                    "Ariel"=>"Blue",
                    "Rapunzel"=>"Purple",
                    "Elsa"=>"White",
                    "Anna"=>"Green",

];

print_r($princesses);

# Searching
# ==============================
echo "<h3>Search in Array</h3>";
echo in_array("Elsa", $princesses) ? "Elsa record found" : "Elsa not found";
echo "<br>Index of Purple: " . array_search("Purple", $princesses);
echo "<br>Key exists -Anna ? " . (array_key_exists("Anna", $princesses) ? "Yes" : "No");

# Sorting
# ==============================

echo "<h3>Sorting in array</h3>";

echo "Sorting by value: ";
asort($princesses); print_r($princesses); # sort by value
echo "<br><br>";
echo "Sorting by key: ";
ksort($princesses); print_r($princesses); # sort by key

# Student record Exercise
# ==============================
// Step 1: Create an associative array
$studentMarks = [
    "Rahul" => 85,
    "Sneha" => 92,
    "Amit" => 74,
    "Priya" => 88,
    "Karan" => 95
];

// Step 2: Print all students with their marks
echo "<hr><h3>---Student Record Exercise--- <hr>All Student Marks:</h3>";
foreach($studentMarks as $name => $marks){
    echo "$name : $marks <br>";
}

// Step 3: Find the student with highest marks
$topper = array_keys($studentMarks, max($studentMarks))[0];
echo "<br><b>Topper:</b> $topper with " . max($studentMarks) . " marks.<br>";

// Step 4: Calculate average marks
$average = array_sum($studentMarks) / count($studentMarks);
echo "<b>Average Marks:</b> $average <br>";

// Step 5: Check if a student exists
$checkStudent = "Sneha";
if(array_key_exists($checkStudent, $studentMarks)){
    echo "<b>$checkStudent</b> exists with marks: " . $studentMarks[$checkStudent];
} else {
    echo "$checkStudent not found.";
}

