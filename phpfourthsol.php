<?php




////using a trait inside a class 

/*

 Traits were introduced in php 5.4.0 .
 These are methods of code reuse,and can also use for multiple inheritance in php.
 A Trait is intended to reduce some limitations of single inheritance by enabling a developer to reuse sets of methods freely in several independent classes living in different class hierarchies. 

It is not possible to instantiate a Trait .


*/

///////////////////////////////////////example
// Trait 
trait Tra { 
   public function say() { 
	echo "Hello world i am trait <br>"; 
   } 
} 


class child2 {  
  use Tra; // we have to use 'use ' keyword for using traits inside class.
  
  
  
  public function childFunc() { 
	echo "i am inside child class<br>"; 
  }   
} 

$obj = new child2(); 
$obj->say(); 
$obj->childFunc(); 




/////////////////////      we can use multiple traits inside a single class
/*

when we use multiple traits it can be possible that both have same name of methods.
To resolve this we can use insteadof keyword to tell php ,to use which trait's method.

*/


// trait A 
trait A { 
    public function sayhello() { 
	echo "hello A <br> "; 
  } 
} 

// trait B 
trait B { 
   public function sayhello() { 
	echo "hello B  <br>"; 
  } 
} 

//class Sample
class Sample { 
   //use two , seperated traits.
   
    use A, B {
        B::sayHello insteadof A;//to resolve conflict,now B's sayhello will be used insteadof A's.
        
        
    }

   public function classMeth() { 
	echo " class method<br>"; 
    } 
} 

$test = new Sample(); 
$test->sayhello(); 

$test->classMeth(); 

////////////////////////////////////// using traits inside traits

trait Hello {
    public function sayHello() {
        echo '<br>Hello <br> ';
    }
}

trait World {
    public function sayWorld() {
        echo 'World!<br>';
    }
}

trait HelloWorld {
    use Hello, World;//using two traits inside another.
}

class MyHelloWorld {
    use HelloWorld;
}

$o = new MyHelloWorld();
$o->sayHello();
$o->sayWorld();







////////////////////////////////namespaces
/*
 In PHP , namespaces are designed to solve two problems ,when creating re-usable code elements such as classes or functions:

    1->Name collisions between code you create, and internal PHP classes/functions/constants or third-party classes/functions/constants.
    
    2->Ability to alias (or shorten) Extra_Long_Names designed to alleviate the first problem, improving readability of source code.

PHP Namespaces provide a way in which to group related classes, interfaces, functions and constants. 

Namespaces are casesensitive.



//////////////////////////// ###### please refer to phpnamespace.php file to see the example;
*/







?> 




