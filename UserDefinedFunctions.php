<?php
//to restrict the datatype for category 2
declare(strict_types=1);

#Types Of Functions
echo "<h1> Types Of Functions </h1>";
echo "<hr>";

#1. Simple Function 
echo "<h2>Simple Function</h2>";
function greet(){
    echo "Hello World! <br>";
}
#function call
greet();
echo "<hr>";

#2. Parameterised Functions
echo "<h2>Parameterised Function</h2>";
function greetings(string $name){
    echo "Hello {$name} , nice to meet you ! <br>";
}
#function call
greetings("Dhivya");
echo "<hr>";

#2.1 With Placeholder and Datatype definition
echo "<h2>Parameterised Function with Placeholder and Datatype definition</h2>";
function greetingsWithPlaceholder(string $name = "name"){
    echo "Hello {$name} , nice to meet you ! <br>";
}

#function call
greetingsWithPlaceholder("Dhivya");
echo "<hr>";

#2.2 Declaring with many parameters
echo "<h2>Parameterised Function with Placeholder , datatype definition and with many parameters</h2>";
function manyParamaters(string $name = "name", $age , $pet){
    echo "Hello {$name} , nice to meet you ! <br>";
    echo "You are {$age} years old and your favourite pet is {$pet}";
}

#function call
manyParamaters("Dhivya", 22, "husky");
echo "<hr>";

//even if the placeholder is given , if the other two are non placeholders, then give name
manyParamaters("",22,"kitten");
echo "<hr>";

#3.Declaring with return value
echo "<h2>Function with return value</h2>";
function returnAdd(int $num1, int $num2){
    return $num1+$num2;
}

#function call
//"Added value of {$num1} and {$num2} is {$result}"; this doesnt work as {$num1 and $num2} are declared locally to the function
//so solution 1:
echo "Added value of 3 and 4 is ". returnAdd(3,4);
echo "<hr>";
//solution 2:
$num1 = 4;
$num2 = 4;
$result = returnAdd($num1, $num2);
echo "Added value of {$num1} and {$num2} is {$result}";
echo "<hr>";

#3.1 Multiple return values
function mathOps($num1,$num2){
    return [$num1+$num2 ,$num1-$num2 ,$num1*$num2 ,$num1/$num2];
}
list($sum,$diff,$mul,$div)=mathOps(8,4);

#function call
echo "For numbers 8 and 4 → Sum: {$sum}, Difference: {$diff}, Multiplication: {$mul}, Division: {$div}";
echo "<hr>";

#4.Passing Arguments by Reference 
echo "<h2>Passing Arguments by Reference: function function_name(&\$var)</h2>";
function addFivebyReference(&$num){
    $num+=5;
    echo "the value number inside the function is: ".$num;
}

$value = 10;
addFivebyReference($value); echo "<br>";
echo "the value number outside the function is: ".$value;
echo "<hr>";

#5.Passing Arguments by Value 
echo "<h2>Passing Arguments by Value: function function_name(\$var)</h2>";
function addFivebyValue($num){
    $num+=5;
    echo "the value number inside the function is: ".$num;
}

$value = 10;
addFivebyValue($value); echo "<br>";
echo "the value number outside the function is: ".$value;
