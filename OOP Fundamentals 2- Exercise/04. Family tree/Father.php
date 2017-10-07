<?php


class Father
{
protected $name;
protected $yearBirth;
protected $yearDeath;

public function __construct($name,$yearBirth,$yearDeath)
{
    $this->setName($name);
    $this->setYearBirth($yearBirth);
    $this->setYearDeath($yearDeath);
}


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function getYearBirth()
    {
        return $this->yearBirth;
    }


    public function setYearBirth($yearBirth)
    {
        $this->yearBirth = $yearBirth;
    }


    public function getYearDeath()
    {
        return $this->yearDeath;
    }


    public function setYearDeath($yearDeath)
    {
        $this->yearDeath = $yearDeath;
    }


public function getTimeLived(){
    return $this->yearDeath-$this->yearBirth;
}
public function getGenerationNum(){
    return 1;
}
public function __toString()
{
    $output="1. Father: ".$this->getName().", ".$this->getYearBirth()." - ".$this->getYearDeath().", lived {$this->getTimeLived()} years";
    return $output;
}
}