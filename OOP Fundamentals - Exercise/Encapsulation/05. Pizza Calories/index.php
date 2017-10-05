<?php
include "Pizza.php";
include "Dough.php";
include "Topping.php";
try{

    $pizzaInfo=explode(" ",trim(fgets(STDIN)));
    $doughInfo=explode(" ",trim(fgets(STDIN)));

    $pizza=new Pizza(toUpperCase($pizzaInfo[1]),$pizzaInfo[2]);
    $dough=new Dough(toUpperCase($doughInfo[1]),toUpperCase($doughInfo[2]),$doughInfo[3]);

    $pizza->setDough($dough);

    while(true){
        $toppingInfo=explode(" ",trim(fgets(STDIN)));
        if($toppingInfo[0]=="END"){
            break;
        }
        $topping=new Topping(toUpperCase($toppingInfo[1]),$toppingInfo[2]);
        $pizza->addTopping($topping);
    }

    echo $pizza."\n";

}catch (Exception $ex){
    echo $ex->getMessage();
}
function toUpperCase($word){
    return ucfirst(strtolower($word));
}