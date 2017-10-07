<?php


class Zebra extends Mammal
{
public function makeSound()
{
    echo "Zs"."\n";
}
    public function eatFood(Food $food,$foodType){

        if($foodType!="Vegetable"){
            echo "Zebra cannot eat that type of food"."\n";
        }
        else{
            $this->foodEaten=$food->getQuantity();
        }

    }
}