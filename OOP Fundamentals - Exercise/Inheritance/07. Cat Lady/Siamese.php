<?php


class Siamese
{
    private $name;
    private $earSize;


    public function __construct($name, $earSize)
    {
        $this->setName($name);
        $this->setEarSize($earSize);
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function getEarSize()
    {
        return $this->earSize;
    }


    public function setEarSize($earSize)
    {
        $this->earSize = $earSize;
    }

function __toString()
{
    $output="{$this->getName()} {$this->getEarSize()}"."\n";
    return $output;
}
}