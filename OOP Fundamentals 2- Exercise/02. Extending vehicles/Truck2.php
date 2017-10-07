<?php


class Truck2 extends Vehicles
{
    public function Drive($distance)
    {
        $requiredFuel = ($this->fuelConsumption+1.6) * $distance;

        if ($requiredFuel >= $this->fuelConsumption) {
            echo "Truck needs refueling"."\n";


        }else{
            $this->fuelQuantity-=$requiredFuel;
            echo "Truck travelled {$distance} km"."\n";
        }
    }

    public function Refuel($liters)
    {
        if($liters>0&&$liters<$this->capacity){
            $this->fuelQuantity+=(0.95*$liters);
        }
        else {
            if($liters<=0){
                echo "Fuel must be a positive number"."\n";
            }else if($liters>=$this->capacity){
                echo "Cannot fit fuel in tank"."\n";
            }

        }

    }
}