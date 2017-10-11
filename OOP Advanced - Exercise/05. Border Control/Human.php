<?php

include "IdInterface.php";
class Human implements IdInterface
{
    private $name;
    private $age;
    private $id;


    public function __construct($name, $age, $id)
    {
        $this->name = $name;
        $this->age = $age;
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }


}