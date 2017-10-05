<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 4.10.2017 г.
 * Time: 12:53
 */
class Pizza
{
private $name;
private $numberOfToppings;
    /**
     * @var Dough $dough
     */
private $dough;
    /**
     * @var Topping[] $toppings
     */
private $toppings=[];

    /**
     * Pizza constructor.
     * @param $name
     * @param $numberOfToppings
     * @param $dough
     */
    public function __construct($name, $numberOfToppings)
    {
        $this->setName($name);
        $this->setNumberOfToppings($numberOfToppings);

    }


    public function setName($name)
    {
        if(empty($name)||(strlen($name)<1||strlen($name)>15)){
            throw new Exception("Pizza name should be between 1 and 15 symbols.");
        }
        $this->name = $name;
    }


    public function setNumberOfToppings($numberOfToppings)
    {
        if($numberOfToppings<0||$numberOfToppings>10){
            throw new Exception("Number of toppings should be in range [1...10].");
        }
        $this->numberOfToppings = $numberOfToppings;
    }


    public function setDough($dough)
    {
        $this->dough = $dough;
    }


    public function getName()
    {
        return $this->name;
    }


    public function getNumberOfToppings()
    {
        return $this->numberOfToppings;
    }

public function getTotalCalories(){
        $calories=$this->dough->getCalories();
        foreach ($this->toppings as $topping){
            $calories+=$topping->getCalories();
        }
        return $calories;
}
public function addTopping(Topping $topping){
    $this->toppings[]=$topping;
}
public function __toString()
{
    $caloriesFormatted=number_format($this->getTotalCalories(),2,'.','');
    return"{$this->getName()} - {$caloriesFormatted} Calories.";
}
}