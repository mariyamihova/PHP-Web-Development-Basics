<?php


class Cat extends Felime
{
    private $breed;

    public function __construct($animalName,$animalType,$animalWeight,$foodEaten,$livingRegion,$breed)
    {
        parent::__construct($animalName, $animalType, $animalWeight, $foodEaten, $livingRegion);
        $this->setBreed($breed);

    }

    /**
     * @return mixed
     */
    public function getBreed()
    {
        return $this->breed;
    }

    /**
     * @param mixed $breed
     */
    public function setBreed($breed)
    {
        $this->breed = $breed;
    }

    public function makeSound()
    {
        echo "Meowwww"."\n";
    }

    public function eatFood(Food $food,$foodType){


            $this->foodEaten=$food->getQuantity();


    }
}