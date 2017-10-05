<?php

include "Vehicle.php";
class Bicycle extends Vehicle
{
    private $brand;
    private $model;
    private $year;
    private $forSkirt="no info";
    private $status="no info";

    function __construct($numberDoors=0, $color,$brand,$model,$year)
    {
        parent::__construct(0, $color);
        $this->brand=$brand;
        $this->model=$model;
        $this->year=$year;
    }

    /**
     * @param null $forSkirt
     */
    public function setForSkirt($forSkirt)
    {
        $this->forSkirt = $forSkirt;
    }

    function rideBike(){
        $this->status="in move";
    }
    function stopBike(){
        $this->status="stopped";
    }

    function __toString()
    {
        return "Doors: {$this->getNumberDoors()} <br>
        Color: {$this->getColor()} <br>
        Brand: {$this->brand} <br>
        Model: {$this->model}<br>
        Year: {$this->year} <br>
        For skirt: {$this->forSkirt}"."\n";
    }
}