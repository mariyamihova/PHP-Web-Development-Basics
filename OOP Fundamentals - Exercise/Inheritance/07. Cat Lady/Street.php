<?php


class Street
{
private $name;
private $decibels;

    public function __construct($name,$decibels)
    {
        $this->setName($name);
        $this->setDecibels($decibels);
    }

    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function getDecibels()
    {
        return $this->decibels;
    }


    public function setDecibels($decibels)
    {
        $this->decibels = $decibels;
    }

public function __toString()
{
    $output="{$this->getName()} {$this->getDecibels()}"."\n";
    return $output;
}
}