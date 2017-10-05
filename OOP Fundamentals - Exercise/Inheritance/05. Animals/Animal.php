<?php


class Animal
{
private $name;
private $age;
private $gender;


    public function __construct($name, $age, $gender)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setGender($gender);
    }


    public function setName($name)
    {
        if(empty(trim($name))){
            throw new Exception("Invalid input");
        }
        $this->name = $name;
    }


    public function setAge($age)
    {
        if($age<=0){
            throw new Exception("Invalid input");
        }
        $this->age = $age;
    }


    public function setGender($gender)
    {
        if(empty(trim($gender))){
            throw new Exception("Invalid input");
        }
        $this->gender = $gender;
    }

function __toString()
{
    $output="{$this->name} {$this->age} {$this->gender}"."\n";
    return $output;
}
}