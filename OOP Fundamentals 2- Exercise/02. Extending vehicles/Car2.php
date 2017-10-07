<?php


class Car2 extends Vehicles
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
        if($liters>0&&$liters<$this->capacity){
            $this->fuelQuantity+=$liters;
        }
       else {
            if($liters<=0)
            {
                echo "Fuel must be a positive number"."\n";
            }
       else if($liters>=$this->capacity){
                echo "Cannot fit fuel in tank"."\n";
            }

       }


    }

}