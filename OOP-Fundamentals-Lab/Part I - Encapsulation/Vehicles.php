<?php


class Vehicles
{
private $numberDoors;
private $color;

function __construct($numberDoors,$color)
{
    // This is the way without creating getters and setter:
    //$this->numberDoors=$numberDoors;
    //$this->color=$color;

    $this->setNumberDoors($numberDoors);
    $this->setColor($color);
}


    public function getNumberDoors()
    {
        return $this->numberDoors;
    }


    public function setNumberDoors($numberDoors)
    {
        $this->numberDoors = $numberDoors;
    }


    public function getColor()
    {
        return $this->color;
    }


    public function setColor($color)
    {
        $this->color = $color;
    }

    function __get($name){
        if($this->{$name}){
        return $this->{$name};
        }else{
        return "Property does not exist.";
    }
}
   function paintCar($newColor){
        $this->setColor($newColor);
   }


}