<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Car{

    var $name="BMW7";
   protected  $color="Black";
   private $wheel=4;

   protected function color(){
       return "I like all black";
   }

   protected function wheel(){
       return "this car is 8 wheel";
   }

   public function aa(){
       return $this->wheel;
   }

   public function getWheel(){
       return $this->wheel;
   }
     public function setWheel($wheel){
            $this->wheel=$wheel;
       }
   
}

$obj=new Car();
echo $obj->name;
// echo $obj->color;
echo "<hr>";
echo $obj->setWheel(6); //override 
echo $obj->getWheel();

