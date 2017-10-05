<?php


class DecimalNumber
{

    private $value;

    function __construct($value)
    {
        $this->value=$value;
    }

    function printReversed(){
        return strrev($this->value);
    }
}