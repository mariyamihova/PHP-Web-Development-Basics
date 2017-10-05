<?php

class Human
{
private $name;
private $age;
private $occupation;

    /**
     * Human constructor.
     * @param $name
     * @param $age
     * @param $occupation
     */
    public function __construct($name, $age, $occupation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

function __toString()
{
    return "{$this->name} - {$this->age}, occupation: {$this->occupation}"."\n";
}
}