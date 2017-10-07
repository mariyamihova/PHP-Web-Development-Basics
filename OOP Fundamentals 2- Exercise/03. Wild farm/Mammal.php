<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 7.10.2017 г.
 * Time: 11:08
 */
class Mammal extends Animal
{
private $livingRegion;

    /**
     * Mammal constructor.
     * @param $livingRegion
     */
    public function __construct($animalName,$animalType,$animalWeight,$foodEaten,$livingRegion)
    {
        parent::__construct($animalName,$animalType,$animalWeight,$foodEaten);
        $this->livingRegion = $livingRegion;
    }


    /**
     * @return mixed
     */
    public function getLivingRegion()
    {
        return $this->livingRegion;
    }

    /**
     * @param mixed $livingRegion
     */
    public function setLivingRegion($livingRegion)
    {
        $this->livingRegion = $livingRegion;
    }


}