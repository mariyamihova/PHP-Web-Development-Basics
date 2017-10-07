<?php


abstract class Vehicle
{
protected $fuelQuantity;
protected $fuelConsumption;

abstract public function Drive($distance);
abstract public function Refuel($liters);

public function __construct($fuelQuantity,$fuelConsumption)
{
    $this->setFuelQuantity($fuelQuantity);
    $this->setFuelConsumption($fuelConsumption);
}

    /**
     * @return mixed
     */
    public function getFuelQuantity()
    {
        return $this->fuelQuantity;
    }

    /**
     * @param mixed $fuelQuantity
     */
    public function setFuelQuantity($fuelQuantity)
    {
        $this->fuelQuantity = $fuelQuantity;
    }

    /**
     * @return mixed
     */
    public function getFuelConsumption()
    {
        return $this->fuelConsumption;
    }

    /**
     * @param mixed $fuelConsumption
     */
    public function setFuelConsumption($fuelConsumption)
    {
        $this->fuelConsumption = $fuelConsumption;
    }


}