<?php

//using phpfourth.php classes in this file using namespace;
require "phpfirstsol.php";

use today\test\Car as C;


//now we will call the Car class defined in today\test namespace;
echo "<br>";
$obj =new C("bmw");
$obj->start()->accelerate()->stop();


?>
