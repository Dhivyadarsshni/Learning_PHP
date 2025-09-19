<?php
# Static methods can be called directly - without creating an instance of the class first.

# method 1

class TestStatic{
    static function hello($name){
        echo "Hello ,{$name}";
    }
}

#to access: ClassName::staticMethod();

TestStatic::hello("Dhivs");
echo "<br> <br>";

# A static method can be accessed from a method in the same class using the self keyword and double colon (::)

# method 2

class TestStatic2{

    public function __construct()
    {
        self::bye();
    }

    static function bye(){
        echo "Goodbye pal";
    }
}

new TestStatic2();
echo "<br> <br>";

# Static methods can also be called from methods in other classes. To do this, the static method should be public:

# method 3

class TestStatic3{

    static function greet($name){

        echo "Good morning ,{$name}";

    }
}

$obj = new TestStatic3();

$obj->greet("Rose");
echo "<br> <br>";

# To call a static method from a child class, use the parent keyword inside the child class. Here, the static method can be public or protected.

# method 4

class TestStatic4{

    static function parent_greet(){
        
        return "Parent says hi";

    }
}
class ChildTestStatic4 extends TestStatic4 {

    public $msg;
    
    public function __construct() {
        $this->msg = parent::parent_greet();
    }
}

$obj1 = new ChildTestStatic4();

echo $obj1->msg;

echo "<br> <br>";
