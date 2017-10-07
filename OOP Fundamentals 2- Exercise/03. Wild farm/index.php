<?php
include "Animal.php";
include "Food.php";
include "Mammal.php";
include "Vegetable.php";
include "Meat.php";
include "Mouse.php";
include "Felime.php";
include "Zebra.php";
include "Cat.php";
include "Tiger.php";


$animalInfo=explode(" ",trim(fgets(STDIN)));


while ($animalInfo[0]!="End"){
    $foodInfo=explode(" ",trim(fgets(STDIN)));

        $animal=null;
        $food=null;

            $type=$animalInfo[0];
            $name=$animalInfo[1];
            $weight=$animalInfo[2];
            $region=$animalInfo[3];


          if($type=="Cat"){
           $breed=$animalInfo[4];
           $animal=new Cat($name,$type,$weight,0,$region,$breed);
           }else if($type=="Mouse"){
              $animal=new Mouse($name,$type,$weight,0,$region);
          }else if($type=="Zebra"){
               $animal=new Zebra($name,$type,$weight,0,$region);
          }else if($type=="Tiger"){
              $animal = new Tiger($name,$type,$weight,0,$region);
          }



        $type=$foodInfo[0];
        $quantity=$foodInfo[1];

        if($type=="Vegetable"){
            $food=new Vegetable($quantity);

        }else if($type=="Meat"){
            $food=new Meat($quantity);

        }

        $animal->makeSound();
        $animal->eatFood($food,$type);
        echo $animal->getAnimalType()."[".$animal->getAnimalName().", ".$animal->getAnimalWeight().", ".$animal->getLivingRegion().", ".
            $animal->getFoodEaten()."]";


    $animalInfo=explode(" ",trim(fgets(STDIN)));
}