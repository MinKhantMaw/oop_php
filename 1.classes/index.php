<?php 
    $name= "Min Khant Maw";
    $age = 24;

    $fruit=(Object)[
        "name" => "Min Khant Maw",
    ];

    function drive()
    {
       global $name;
       return $name . "can drive";
    }

echo $name ;

echo drive();
echo "<pre></pre>";
var_dump($fruit);
echo "<hr>";
echo $fruit->name;
?>

