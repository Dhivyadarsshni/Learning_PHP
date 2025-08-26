<?php
# Built-in Functions => Strings
# ==============================
echo "<h3>Strings Built in Functions</h3>";

$str = "Dhivya Darsshni";
echo "<b> Original String is : </b> {$str} <br>";

// length
echo "Length: " . strlen($str) . "\n";
echo "<br><br>";

// word count
echo "Word Count: " . str_word_count($str) . "\n";
echo "<br><br>";

// reverse
echo "Reverse: " . strrev($str) . "\n";
echo "<br><br>";

// position of substring
echo "Position of 'Darsshni': " . strpos($str, "Darsshni") . "\n";
echo "<br><br>";

// replace
echo "Replace: " . str_replace("Darsshni", "G", $str) . "\n";
echo "<br><br>";

// substring
echo "Substring: " . substr($str, 0, 5) . "\n";
echo "<br><br>";

// trim
echo "Trim: '" . trim("   Hi PHP   ") . "'\n";
echo "<br><br>";

// lower & upper
echo "Lower: " . strtolower($str) . "\n";echo "<br><br>";
echo "Upper: " . strtoupper($str) . "\n";
echo "<br><br>";

// explode & implode
$arr = explode(" ", $str);
echo "Explode: "; print_r($arr);echo "<br><br>";
echo "Implode: " . implode("-", $arr) . "\n";
echo "<br><br>";
echo "<hr>";

# Built-in Functions => Numbers
# ==============================
echo "<h3>Integers - Built in Functions</h3>";

$num = -15.75;
//absolute
echo "Absolute: " . abs($num) . "\n";echo "<br><br>";

//square root
echo "Square Root (16): " . sqrt(16) . "\n";echo "<br><br>";

//power of two numbers
echo "Power (2^3): " . pow(2, 3) . "\n";echo "<br><br>";

//round off
echo "Round(3.6): " . round(3.6) . "\n";echo "<br><br>";

//ceil 
echo "Ceil(3.1): " . ceil(3.1) . "\n";echo "<br><br>";

//floor
echo "Floor(3.9): " . floor(3.9) . "\n";echo "<br><br>";

//random number in range
echo "Random(1-10): " . rand(1, 10) . "\n";echo "<br><br>";

//maximum of given numbers
echo "Max: " . max(10, 20, 5) . "\n";echo "<br><br>";

//minimum of given numbers
echo "Min: " . min(10, 20, 5) . "\n";echo "<br><br>";
echo "<hr>";


# Built-in Functions => Date and Time
# ==============================

echo "<h3>Date and time - Built in Functions</h3>";

echo "Today: " . date("Y-m-d") . "\n";echo "<br><br>";

echo "Time: " . date("H:i:s") . "\n";echo "<br><br>";

echo "Timestamp: " . time() . " (time in seconds from Jan 1 1970) \n";echo "<br><br>";

echo "Next Monday: " . date("Y-m-d", strtotime("next Monday")) . "\n";
echo "<hr>";

# Built-in Functions => Array 
# ==============================
echo "<h3>Arrays - Built in Functions</h3>";

echo "check other files names that includes arrays.php";    