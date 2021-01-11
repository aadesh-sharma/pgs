<?php
namespace today\test;
///question1 method chaining
/*
Method chaining is a concept where many methods of a class are called in a sequence,using the reference of the same class.  
 In order to chain methods ,a method should return the $this keyword,they can chained together to create much more shorter and self explaining code.
 
 for example-
  Lets say we have a class Car and we
 have few methods like,start(),accelerate(),stop(); 
 It is obvious that these methods are going to apply in sequence like this ,
 1->start()
 2->accelerate()
 3->stop()
 so instead of calling these methods seperately when we know the sequence ,we can call them using method chaining
*/

class Car {
  public $name;
  public function __construct($name){
    $this->name=$name;
    
  }
  public function start(){
    echo"car has started <br>";
    return $this;
  }
  
  public function accelerate(){
    echo"car has been accelerated <br>";
    return $this;
  }
  
  public function stop(){
    echo"car has stoppped <br>";
    return $this;
  }
   
}

//now making object of class Car
$obj =new Car("bmw");
$obj->start()->accelerate()->stop();

?>
