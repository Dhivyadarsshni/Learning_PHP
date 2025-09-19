<?php

#method overriding

echo "<b>Method Overriding </b> <br>";

class Rose{
    public function description(){
        return "Flowers are commonly red in color";
    }
}
class PinkRose extends Rose{
    public function description(){
        return "I am pink Rose, i am pink in color";
    }
}
class WhiteRose extends Rose{
    public function description(){
        return "I am white Rose, i am white in color";
    }
}

$rose1 = new PinkRose();

echo $rose1->description();

echo "<br>";

$rose2 = new WhiteRose();

echo $rose2->description();

echo "<br><br>";