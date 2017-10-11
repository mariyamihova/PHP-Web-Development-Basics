<?php


class Pet implements IBirthdate
{
    private $name;
    private $birthDate;


    public function __construct($name, $birthDate)
    {
        $this->name = $name;
        $this->birthDate = $birthDate;
    }

    public function getBdate()
    {
        return $this->birthDate;
    }


}