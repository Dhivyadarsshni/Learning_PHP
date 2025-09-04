<?php

#Scopes in PHP
echo "<h1>Scopes in php</h1>";
echo "<hr>";

#1.Global Scope
echo "<h2>1. <u>Global Scopes</u></h2>";

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

#2.Local Scopes
echo "<h2>2. <u>Local Scopes</u></h2>";

echo "The variables used inside the function will not be visible outside that func <br>";

    function localScope(){
        $x = 10;
        echo "Inside Function : {$x} <br>";
    }

    #function call

    localScope();
    // this line throws error: " echo "Outside Function : {$x} <br>"; "
    echo "<hr>";

#3.Static Scope
echo "<h2>3. <u>Static Scopes</u></h2>";

    function staticScope(){
        static $counter = 0;
        $counter++;
        echo "Count : {$counter} -> the function is called {$counter} time(s) <br>";
    }

    #function call

    staticScope();
    staticScope();
    staticScope();

    echo "<hr>";

#4.Class Scope
echo "<h2>4. <u>Class Scopes</u></h2>";    
    class myHero{
        public $name = "Ace";
        protected $power = "Fire Fist";
        private $secret = "Roger's son";

        function showDetails(){
            echo "Only shows all details , because the variables are declared inside the class <br>";
            echo "Name: ". $this->name."<br>";
            echo "Power: ". $this->power ."<br>";
            echo "Secret: ". $this->secret."<br>";
        }
    }

    $obj = new myHero();
    echo "<b>Name from outside class: ".$obj->name. "</b><br>";
    echo "<b>calling the function: </b><br>";
    $obj->showDetails();