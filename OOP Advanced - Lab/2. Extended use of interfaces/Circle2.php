<?php

include "Surface.php";
include "Circumference.php";

class Circle2 implements Surface,Circumference
{
    private $radius;


    public function __construct($radius)
    {
        $this->radius = $radius;
    }


    public function getSurface(){
        return pow($this->radius,2)*M_PI;
    }

    public function getCircumference(){
        return 2*($this->radius*M_PI);
    }

    public function __toString()
    {
        $output="Circle with radius = {$this->radius}mm: "."\n";
        $output.="Area = {$this->getSurface()} mm"."\n";
        $output.="Circumference = {$this->getCircumference()} mm"."\n";

        return $output;
    }
}