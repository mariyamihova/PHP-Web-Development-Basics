<?php


class Car extends Vehicle
{
    public function Drive($distance)
    {
        $requiredFuel = ($this->fuelConsumption+0.9) * $distance;

        if ($requiredFuel >= $this->fuelQuantity) {
           echo "Car needs refueling"."\n";


    }else{
            $this->fuelQuantity-=$requiredFuel;
            echo "Car travelled {$distance} km"."\n";
        }
    }

    public function Refuel($liters)
    {
      $this->fuelQuantity+=$liters;
    }

}