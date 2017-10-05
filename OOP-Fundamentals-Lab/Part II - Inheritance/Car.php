<?php

include "Vehicle.php";
class Car extends Vehicle
{
    private $brand;
    private $model;
    private $year;


    function __construct($numberDoors, $color, $brand, $model, $year)
    {
        parent::__construct($numberDoors, $color);
        $this->setBrand($brand);
        $this->setModel($model);
        $this->setYear($year);

    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

public function paintMyCar($newColor){

    //This will add new property ''color'' to class Car:
  // $this->color=$newColor;

    //If it is private in the main class and we want to overwrite it, we use:
    //parent::setColor($newColor);

    //If color is set as protected in the main class, we do not need setter:
    $this->color=$newColor;
}
}

