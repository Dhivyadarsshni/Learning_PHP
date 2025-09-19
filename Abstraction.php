<?php
define("PI",3.14);
#Abstraction

#Using Abstract class
abstract class Shape{
    abstract public function area();
}

class Square extends Shape{

    private $side;

    function __construct($side)
    {
        $this->side = $side;
    }
    public function area(){
        return $this->side ** 2;
    }
}

class Triangle extends Shape{

    private $base, $height;

    function __construct($base,$height){
        $this->base = $base;

        $this->height =$height;
    }

    function area(){
        return 0.5 *$this->base* $this->height;
    }
   
}
class Circle extends Shape{
    private $r;
    function __construct($rad){
        $this->r = $rad;
    }
    function area(){
        return PI * $this-> r * $this-> r;
    }
    
}

$shapes1 = [new Circle(7),new Square(5), new Triangle(3,6)];

foreach($shapes1 as $shape_iterator){
    echo "Area of ".get_class($shape_iterator) ." is : ". $shape_iterator->area(). " units <br>";
}

echo "</br>";

#Using Interface

interface Payment{
    function payment_mode($amount);
}
class UPI implements Payment{
    function payment_mode($amount)
    {
        return "Paid {$amount} using UPI <br>"; 
    }
}
class NetBanking implements Payment{
    function payment_mode($amount)
    {
        return "Paid {$amount} using Net banking <br>"; 
    }
}
class CreditCard implements Payment{
    function payment_mode($amount)
    {
        return "Paid {$amount} using credit card <br>"; 
    }
}

function checkout(Payment $obj, $amount){
    echo $obj->payment_mode($amount);
}
checkout(new CreditCard(),500);
checkout(new UPI(),750);
checkout(new NetBanking,570);

echo "<br>";

#usage 2 - Multiple Inheritance
interface Flyable {
    public function fly();
}

interface Swimmable {
    public function swim();
}

class Duck implements Flyable, Swimmable {
    public function fly() { echo "Duck flying<br>"; }
    public function swim() { echo "Duck swimming<br>"; }
}

$duckling = new Duck();

$duckling->fly();

$duckling->swim();

echo "<br>";

#Usage of both abstract class and interface

//abstract class - vehicles
//interface - insurable

interface Insurable{
    function get_insurance_amount();
}
abstract class Vehicles{

    protected $brand;
    protected $model;

    public function __construct($brand,$model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    public abstract function get_fuel_type();

    public function gear(){
        echo "This vehicle has gears";
    }
    public function brake(){
        echo "This vehicle has brakes";
    }
    public function getDetails() {
        return "Brand: $this->brand, Model: $this->model";
    }
}
class Bike extends Vehicles implements Insurable{
    function get_fuel_type()
    {
        return "Petrol";
    }
    function get_insurance_amount()
    {
        return "5000";
    }
}
class Car extends Vehicles implements Insurable{
    function get_fuel_type()
    {
        return "Diesel";
    }
    function get_insurance_amount()
    {
        return "7000";
    }
}
class Truck extends Vehicles{
    function get_fuel_type()
    {
        return "Diesel";
    }
}

$vehicles = [new Car("Hyundai","Creta"),new Bike("TVS","Jupiter"),new Bike("Honda","Dio"),new Truck("Tata","LPT")];

foreach($vehicles as $v){
    echo "Class: ". get_class($v) ."<br>".
    "Vehicle details: ". $v->getDetails(). "<br>".
    "Fuel Type: " . $v->get_fuel_type(). "<br>" .
    "Insurance amount: " ;
    if($v instanceof Insurable){
        echo $v->get_insurance_amount();
    }else{
        echo "Non insurable";
    }

    echo "<br><br>";
}