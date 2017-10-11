<?php

include "IBuyer.php";
class Citizen implements IBuyer
{
    private $name;
    private $age;
    private $id;
    private $birthDate;

    private $food=0;

    public function __construct($name, $age, $id,$birthDate)
    {
        $this->name = $name;
        $this->age = $age;
        $this->id = $id;
        $this->birthDate=$birthDate;
    }

    public function buyFood()
    {
        $this->setFood($this->food+10);
    }
    public function getFood(){
        return $this->food;
    }
    public function setFood(int $value){
        $this->food=$value;
    }

}