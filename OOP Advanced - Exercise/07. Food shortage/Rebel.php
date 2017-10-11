<?php


class Rebel implements IBuyer
{
private $name;
private $age;
private $group;

private $food=0;

    /**
     * Rebel constructor.
     * @param $name
     * @param $age
     * @param $group
     */
    public function __construct($name, $age, $group)
    {
        $this->name = $name;
        $this->age = $age;
        $this->group = $group;
    }

    public function buyFood()
    {
         $this->setFood($this->food+5);
    }
    public function getFood(){
        return $this->food;
    }
    public function setFood(int $value){
        $this->food=$value;
    }


}