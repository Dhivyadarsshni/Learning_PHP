<?php
interface Animals{
    function sound();
}
class Doggy implements Animals{
    function sound(){
        return "Dog barks";
    }
}
class Catty implements Animals{
    function sound()
    {
        return "Cat meows";
    }
}

$dog = new Doggy();

echo $dog -> sound();

echo "<br>";

$cat = new Catty();

echo $cat -> sound();

echo "<br> <br>";