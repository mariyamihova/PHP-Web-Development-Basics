<?php


abstract class Animal
{
    private $animalName;
    private $animalType;
    private $animalWeight;
    protected $foodEaten;


    public function __construct($animalName, $animalType, $animalWeight, $foodEaten)
    {
        $this->setAnimalName($animalName);
        $this->setAnimalType($animalType);
        $this->setAnimalWeight($animalWeight);
        $this->setFoodEaten($foodEaten);
    }

    /**
     * @return mixed
     */
    public function getAnimalName()
    {
        return $this->animalName;
    }

    /**
     * @param mixed $animalName
     */
    public function setAnimalName($animalName)
    {
        $this->animalName = $animalName;
    }

    /**
     * @return mixed
     */
    public function getAnimalType()
    {
        return $this->animalType;
    }

    /**
     * @param mixed $animalType
     */
    public function setAnimalType($animalType)
    {
        $this->animalType = $animalType;
    }

    /**
     * @return mixed
     */
    public function getAnimalWeight()
    {
        return $this->animalWeight;
    }

    /**
     * @param mixed $animalWeight
     */
    public function setAnimalWeight($animalWeight)
    {
        $this->animalWeight = $animalWeight;
    }

    /**
     * @return mixed
     */
    public function getFoodEaten()
    {
        return $this->foodEaten;
    }

    /**
     * @param mixed $foodEaten
     */
    public function setFoodEaten($foodEaten)
    {
        $this->foodEaten = $foodEaten;
    }

    public function makeSound(){

    }
     public function eatFood(Food $food,$type){

     }

}