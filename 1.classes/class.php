<?php 

class mySelf{  
    //property
    var $name="min khant maw";
    var $age=23;
    
    function eat()
    {
        return $this->name.  " can play game";
    }

     function sleep()
    {
        $this->name.  " I'm sleeping";
    }
}

$obj=new mySelf();
// var_dump($obj);
echo $obj->name;
echo $obj->eat();