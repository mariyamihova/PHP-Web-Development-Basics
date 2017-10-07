<?php


class Tiger extends Felime
{
    public function makeSound()
    {
        echo "ROARRR"."\n";
    }
    public function eatFood(Food $food,$foodType){

        if($foodType!="Meat"){
            echo "Tiger cannot eat that type of food"."\n";
        }
        else{
            $this->foodEaten=$food->getQuantity();
        }

    }
}