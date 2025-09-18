<?php

Class PersonalExercise{
    public $name;
    public $time;

    function __construct($name,$time){

        $this->name = $name;
        $this ->time = $time;
    }

    function get_name(){
        return $this->name;
    }

    function get_time(){
        return $this->time;
    }

    function __destruct()
    {
        echo "The fruit is {$this->name} {$this->time} <br>";
    }

}

$person1 = new PersonalExercise("Swimming",30);

echo $person1->get_name(); echo "<br>";echo $person1->get_time();

echo "<br>";

$person2 = new PersonalExercise("Badminton",45);
 
echo $person2->get_name(); echo "<br>";echo $person2->get_time();

echo "<br>";