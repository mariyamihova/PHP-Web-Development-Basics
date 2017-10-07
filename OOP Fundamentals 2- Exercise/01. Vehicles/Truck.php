<?php


class Truck extends Vehicle
{
    public function Drive($distance)
    {
        $requiredFuel = ($this->getFuelConsumption()+1.6) * $distance;

        if ($requiredFuel >= $this->getFuelQuantity()) {
            echo "Truck needs refueling"."\n";


        }else{
            $this->fuelQuantity-=$requiredFuel;
            echo "Truck travelled {$distance} km"."\n";
        }
    }

    public function Refuel($liters)
    {
        $this->fuelQuantity+=(0.95*$liters);
    }
}