<?php

include "IPerson.php";
class Citizen implements IPerson
{

    private $name;
    private $age;


    public function __construct($name, $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }


    public function setName($name)
    {
        $this->name=$name;
    }

    public function setAge($age)
    {
        $this->age=$age;
    }

    public function __toString()
    {
        $output=$this->name."\n".$this->age;
        return $output;
    }

}