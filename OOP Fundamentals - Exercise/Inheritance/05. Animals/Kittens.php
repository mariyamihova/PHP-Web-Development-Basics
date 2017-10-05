<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 4.10.2017 г.
 * Time: 11:29
 */
class Kittens extends Cat
{

    public function __construct($name, $age)
    {
        parent::__construct($name, $age, "female");
    }

    public function produceSound()
    {
        return "Miau";
    }
}