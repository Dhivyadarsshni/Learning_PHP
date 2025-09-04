<?php
#Scopes in PHP
echo "<h1>Scopes in php</h1>";
echo "<hr>";
#1.Global Scope
echo "<h2><u>Global Scopes</u></h2>";
#1.1 accessing using global keyword
echo "<h3>1.1 Accessing using global keyword</h3>";

$var = "Hani";
function globalScope(){
    global $var;
    echo "Hello , {$var} ! <br>";
}

#function call

globalScope();
echo "<hr>";

#1.2 accessing using $_GLOBAL Array
echo "<h3>1.2 Accessing using GLOBAL Array</h3>";

function globalScope2(){
    echo "Hello , ". $GLOBALS["var"] . " !<br>";
}
#function call

globalScope2();
echo "<hr>";

#1.3 passing the parameters
echo "<h3>1.3. Passing the parameters</h3>";

function globalScope3($test){
    echo "Hello , {$test} !<br>";
}
#function call

globalScope3($var);
echo "<hr>";