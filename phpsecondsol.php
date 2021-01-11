<?php

interface A {

  public function A1();
  public function A2();
  
}

abstract class B implements A{
   public function A1(){
     echo" function A1 is called inside abstract class<br>";
   }
}


class abc  extends B {
     private $id;
     private $name;
     
     public function __construct($name){
       $this->name=$name;
    
     }
     public function A2(){
        
        echo"function A2 called inside abc class<br>";
     }
     public function setId($id){
        $this->id=$id;
     }
      public function getId(){
       return $this->id;
     }
     
      public function setName($name){
        $this->name=$name;
     }
     public function getName(){
        return $this->name;
     }
     
     
}
//now making object of class abc
$obj =new abc("abc");
$obj->A1();
$obj->A2();
$obj->setId(2);
echo $obj->getId();
echo "<br>";
$obj->setName("newname");
echo $obj->getName();



?>
