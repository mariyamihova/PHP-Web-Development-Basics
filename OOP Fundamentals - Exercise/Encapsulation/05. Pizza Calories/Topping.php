<?php


class Topping
{
    const CALORIES_PER_GRAM=2;
    const TOPPING_TYPES=[
        "Meat"=>1.5,
        "Veggies"=>0.8,
        "Cheese"=>1.1,
        "Sauce"=>0.9
    ];
    private $type;
    private $weight;


    public function __construct($type, $weight)
    {
        $this->setType($type);
        $this->setWeight($weight);
    }


    public function setType($type)
    {
        if(!array_key_exists($type,self::TOPPING_TYPES)){
            throw new Exception("Cannot place {$type} on top of your pizza");
        }
        $this->type = $type;
    }


    public function setWeight($weight)
    {
        if($weight<1||$weight>50){
            throw new Exception("{$this->weight} should be in the range [1...50].");
        }
        $this->weight = $weight;
    }

public function getCalories(){
        return $this->weight*self::CALORIES_PER_GRAM
            *self::TOPPING_TYPES[$this->type];
}
}