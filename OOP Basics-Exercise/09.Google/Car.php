<?php


class Car
{
    private $carModel;
    private $carSpeed;


    public function __construct($carModel, $carSpeed)
    {
        $this->carModel = $carModel;
        $this->carSpeed = $carSpeed;
    }

function __toString()
{
   return"{$this->carModel} {$this->carSpeed}";
}
}