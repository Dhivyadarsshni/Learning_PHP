<?php
abstract class Boss{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }
    abstract protected function work();
}

abstract class Manager extends Boss{
    abstract function work();
}
class Junior extends Manager{
    function work()
    {
        return "On process by {$this->name}";
    }
}

$employee1 = new Junior("HK");

echo $employee1->work();

echo "<br>";
