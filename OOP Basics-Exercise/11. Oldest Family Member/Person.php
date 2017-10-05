<?php


class Person
{
private $name;
private $age;

function __construct($name,$age)
{
    $this->name=$name;
    $this->age=$age;
}


    public function getAge()
    {
        return $this->age;
    }
function __toString()
{
    return"{$this->name} {$this->age}";
}

}