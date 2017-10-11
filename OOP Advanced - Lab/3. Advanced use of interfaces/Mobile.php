<?php


abstract class Mobile
{
protected $operator;
protected $canCall;
protected $battery;


    public function __construct($operator, $canCall, $battery)
    {
        $this->operator = $operator;
        $this->canCall = $canCall;
        $this->battery = $battery;
    }


}