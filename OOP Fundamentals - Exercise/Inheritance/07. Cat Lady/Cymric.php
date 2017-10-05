<?php


class Cymric
{
    private $name;
    private $furLength;


    public function __construct($name, $furLength)
    {
        $this->setName($name);
        $this->setFurLength($furLength);
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function getFurLength()
    {
        return $this->furLength;
    }


    public function setFurLength($furLength)
    {
        $this->furLength = $furLength;
    }


    function __toString()
    {
        $output="{$this->getName()} {$this->getFurLength()}"."\n";
        return $output;
    }

}