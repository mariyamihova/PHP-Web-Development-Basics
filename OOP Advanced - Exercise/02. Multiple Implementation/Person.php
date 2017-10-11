<?php
include "PersonInterface.php";
include "IdentifiableInterface.php";
include "BirthdateInterface.php";
class Person implements PersonInterface,IdentifiableInterface,BirthdateInterface
{
private $name;
private $age;
private $id;
private $birthDate;


    public function __construct($name, $age, $id, $birthDate)
    {
        $this->name = $name;
        $this->age = $age;
        $this->id = $id;
        $this->birthDate = $birthDate;
    }

    public function setDate($date)
    {
        $this->birthDate=$date;
    }

    public function getDate()
    {
        return $this->birthDate;
    }

    public function setID($id)
    {
        $this->id=$id;
    }

    public function getID()
    {
        return $this->id;
    }

    public function setName($name)
    {
       $this->name=$name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
       $this->age=$age;
    }

    public function getAge()
    {
        return $this->age;
    }




    public function __toString()
    {
        $output=$this->getName()."\n".$this->getAge()."\n".$this->getID()."\n".$this->getDate();
        return $output;
    }

}