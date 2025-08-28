<?php
//to restrict the datatype 
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