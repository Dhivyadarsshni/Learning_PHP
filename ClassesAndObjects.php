<?php

#Eg : Book Management System

Class Book{
    public $title;
    public $author;
    public $price;

    function set_properties ($title, $author,$price ){
        $this->title = $title;

        $this->author = $author;

        $this->price = $price;
    }

    #method 1:

    function get_properties(){
        echo "The name of the book is {$this->title}, written by {$this->author} and the price would be {$this->price} $.";
    }

    #method 2: 

    function return_title(){
        return $this->title;
   }
   function return_author(){
        return $this->author;
   }
   function return_price(){
        return $this->price;
   }


}

$tsitp = new Book();

$tsitp -> set_properties("The Summer i turned pretty", "Jenny Han", 200);

$tsitp-> get_properties(); echo "</br>";

echo $tsitp->return_title();echo "</br>";

echo $tsitp -> return_author();echo "</br>";

echo $tsitp -> return_price();echo "</br>";

echo "<br>";

$hp = new Book();

$hp -> set_properties("Harry Potter", "J K Rowling", 500);

$hp ->get_properties(); echo "</br>";


echo $hp->return_title();echo "</br>";

echo $hp -> return_author();echo "</br>";

echo $hp -> return_price();echo "</br>";
