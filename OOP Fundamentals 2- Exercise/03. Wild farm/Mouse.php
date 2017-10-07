<?php


class Mouse extends Mammal
{
    public function makeSound()
    {
        echo "SQUEEEAAAK!"."\n";
    }
    public function eatFood(Food $food,$foodType){

        if($foodType!="Vegetable"){
            echo "Mouse cannot eat that type of food"."\n";
        }
        else{
            $this->foodEaten=$food->getQuantity();
        }

    }
}