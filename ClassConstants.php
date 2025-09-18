<?php

class Goodbye{
    const ENDING_MSG = "Thank you for visiting us, Visit Again!";
}

echo Goodbye::ENDING_MSG;
echo "<br>";

#we can access a constant from inside the class by using the self keyword
 #followed by the scope resolution operator (::) followed by the constant name, like here:

class Sayonara{
    const LEAVING_MSG ="Sayonara Senpai";

    public function sayonara(){
        echo self::LEAVING_MSG;
    }
}

$obj = new Sayonara();

$obj->sayonara();

echo "<br> <br>";
