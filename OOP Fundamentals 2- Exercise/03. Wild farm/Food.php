<?php


abstract class Food
{
protected $quantity;

public function __construct($quantity)
{
    $this->setQuantity($quantity);
}


    public function getQuantity()
    {
        return $this->quantity;
    }


    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }


}