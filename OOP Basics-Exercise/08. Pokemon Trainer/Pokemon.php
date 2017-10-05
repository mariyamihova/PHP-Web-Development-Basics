<?php


class Pokemon
{
private $name;
private $element;
private $health;

    /**
     * Pokemon constructor.
     * @param $name
     * @param $element
     * @param $health
     */
    public function __construct($name, $element, $health)
    {
        $this->name = $name;
        $this->element = $element;
        $this->health = $health;
    }


    public function getName()
    {
        return $this->name;
    }

    public function getElement()
    {
        return $this->element;
    }

    public function reduceHealth(int $value){
        return $this->health-=$value;
    }
   public function isAlive(){
        return $this->health>0;
   }


}