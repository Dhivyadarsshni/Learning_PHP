<?php
# method 1
class StaticProp{
    static $msg = "Hello";
    
}

echo StaticProp::$msg;
echo "<br><br>";

# method 2
class StaticProp2{
    static $greet = "tshus";

    public function __construct()
    {
        echo self::$greet;
    }
}

new StaticProp2();
echo "<br><br>";

# method 3
class StaticProp3{
    static $parent_msg = "Parent says hi";
    
}
class ChildClassStaticProp3 extends StaticProp3{

    function method_toassign(){
        return parent::$parent_msg;
    }
}

echo ChildClassStaticProp3::$parent_msg . " <br>";

$objC = new ChildClassStaticProp3();

echo $objC->method_toassign();

echo "<br><br>";
