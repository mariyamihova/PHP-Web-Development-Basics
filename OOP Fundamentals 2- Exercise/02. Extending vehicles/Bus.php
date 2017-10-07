<?php

class Bus extends Vehicles
{
    public function Drive($distance)
    {
        $requiredFuel = ($this->fuelConsumption+1.4) * $distance;

        if ($requiredFuel >= $this->fuelQuantity) {
            echo "Bus needs refueling"."\n";


        }else{
            $this->fuelQuantity-=$requiredFuel;
            echo "Bus travelled {$distance} km"."\n";
        }
    }
    public function DriveEmpty($distance)
    {
        $requiredFuel = $this->fuelConsumption * $distance;

        if ($requiredFuel >= $this->fuelQuantity) {
            echo "Bus needs refueling"."\n";


        }else{
            $this->fuelQuantity-=$requiredFuel;
            echo "Bus travelled {$distance} km"."\n";
        }
    }
    public function Refuel($liters)
    {
        if($liters>0 && $liters< $this->capacity){
            $this->fuelQuantity+=$liters;
        }
        else {
            if($liters<=0)
            {
                echo "Fuel must be a positive number"."\n";
            }
            else if($liters >=$this->capacity){
                echo "Cannot fit fuel in tank"."\n";
            }

        }

    }
}