<?php
#1. Single Inheritance

echo "<h3>Single Inheritance</h3>";

class Dog {
    public $name;

    function sound($name){
        echo "$name (dog) barks and it sounds woof!";
    }
}

class Puppy extends Dog{

}

$pup = new Puppy();

$pup->sound($pup->name = "Zoro");

echo "<br>";

#2. Multi-level Inheritance

echo "<h3>Multi-level Inheritance</h3>";

class Grandparent{
    function property(){
        echo "This property is from Grand Ma!";
    }

}
class MyParent extends Grandparent{

}
class Child extends MyParent{

}

$obj = new Child();

echo $obj->property();

#3. Hierarchical Inheritance

echo "<h3>Hierarchical Inheritance</h3>";
class Animal{
    public $name;

    function eat($name){
        echo "This animal eats food.";
        echo "Its an {$name} <br>";
    }
}
class Cat extends Animal{

}                       
class Cow extends Animal{

}
class Lion extends Animal{

}

$cat = new Cat();
echo $cat->eat($cat->name = "Cat");

$cow = new Cow();
echo $cow->eat($cow->name = "Cow");

$lion = new Lion();
echo $lion->eat($lion->name = "Lion");

echo "<br>";

#4. Hybrid Inheritance

echo "<h3>Hybrid Inheritance</h3>";

class CEO{
    function ceo_speaks(){
        echo "CEO: Hey your work is pending!";
    }
}
class SrManager extends CEO{
    function srManager_speaks(){
        echo "Manager : Doing it right away, Mam <br>";

        echo "Do it you juniors!!";
    }
}

class Junior1 extends SrManager{
    function junior1_speaks(){
        echo "Junior 1: On it , Sir";
    }
}
class Junior2 extends SrManager{
    function junior2_speaks(){
        echo "Junior 2: Aye Aye, Captain";
    }
}

$shruti = new Junior1();

$shruti->ceo_speaks(); echo "<br>";
$shruti->srManager_speaks(); echo "<br>";
$shruti->junior1_speaks(); echo "<br>";

echo "<br>";

$akshara = new Junior2();

$akshara->ceo_speaks(); echo "<br>";
$akshara->srManager_speaks(); echo "<br>";
$akshara->junior2_speaks(); echo "<br>";
 echo "<br>";