<?php
class Person
{
    public $name;
    public $age;

    function __construct($a,$b)
    {
        $this->name=$a;
        $this->age=$b;

        echo $this->name." ".$this->age;
    }
}

$name="Pesho";//trim(fgets(STDI));
$age=20;//trim(fgets(STDI));

$person= new Person($name,$age);