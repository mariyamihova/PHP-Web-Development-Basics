<?php


abstract class Vehicles
{
    protected $fuelQuantity;
    protected $fuelConsumption;
    protected $capacity;

    abstract public function Drive($distance);
    abstract public function Refuel($liters);

    public function __construct($fuelQuantity,$fuelConsumption,$capacity)
    {
        $this->setFuelQuantity($fuelQuantity);
        $this->setFuelConsumption($fuelConsumption);
        $this->setCapacity($capacity);
    }


    public function getFuelQuantity()
    {
        return $this->fuelQuantity;
    }


    public function setFuelQuantity($fuelQuantity)
    {
        $this->fuelQuantity = $fuelQuantity;
    }


    public function getFuelConsumption()
    {
        return $this->fuelConsumption;
    }


    public function setFuelConsumption($fuelConsumption)
    {
        $this->fuelConsumption = $fuelConsumption;
    }


    public function getCapacity()
    {
        return $this->capacity;
    }


    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }



}