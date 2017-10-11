<?php
include "Area.php";

class Circle implements Area
{
private $radius;


    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return pow($this->radius,2)*M_PI;
    }

public function __toString()
{
    $output="Circle, radius = {$this->radius} mm, area = {$this->getArea()}"."\n";
    return $output;
}
}