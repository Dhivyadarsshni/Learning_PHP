<?php

trait goodmorning{
    function gm(){
        echo "Good Morning <br>";
    }
}

trait goodnight{
    function gn(){
        echo "Good Night <br>";
    }
}
trait goodevening{
    function ge(){
        echo "Good evening <br>";
    }
}
trait goodafternoon{
    function ga(){
        echo "Good afternoon <br>";
    }
}

class Greeting{
    use goodmorning, goodnight, goodevening, goodafternoon;

    function greetings_ontime($time) {
        if ($time >= 5 && $time < 12) {
            $this->gm();
        } elseif ($time >= 12 && $time < 17) {
            $this->ga();
        } elseif ($time >= 17 && $time < 21) {
            $this->ge();
        } else {
            $this->gn();
        }
    }
}

$g = new Greeting();
$g->greetings_ontime(10); 

echo "<br>";