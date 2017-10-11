<?php

include "IBirthdate.php";
class Person implements IBirthdate
{
    private $name;
    private $age;
    private $id;
    private $birthDate;


    public function __construct($name, $age, $id,$birthDate)
    {
        $this->name = $name;
        $this->age = $age;
        $this->id = $id;
        $this->birthDate=$birthDate;
    }

    public function getBdate()
    {
       return $this->birthDate;
    }


}