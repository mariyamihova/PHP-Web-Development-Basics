<?php


class Vehicle
{
    private $numberDoors;
    protected $color;


    public function __construct($numberDoors, $color)
    {
        $this->setNumberDoors($numberDoors);
        $this->setColor($color);
    }

    /**
     * @return mixed
     */
    public function getNumberDoors()
    {
        return $this->numberDoors;
    }

    /**
     * @param mixed $numberDoors
     */
   protected function setNumberDoors($numberDoors)
    {
        $this->numberDoors = $numberDoors;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

   public function paintVehicle($color){
        $this->setColor($color);
}

   public function __get($name){
    if($this->{$name}){
        return $this->{$name};
    }else{
        return "Property doesn't exist";
    }
}
}

