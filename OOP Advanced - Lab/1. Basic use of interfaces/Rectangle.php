<?php

class Rectangle implements Area
{


    private $width;
    private $heigth;


    public function __construct($width, $heigth)
    {
        $this->width = $width;
        $this->heigth = $heigth;
    }


    public function getArea()
    {
        return $this->width*$this->heigth;
    }

    public function __toString()
    {
        $output="Rectangle, width = {$this->width} mm, height = {$this->heigth} mm, area = {$this->getArea()}";
        return $output;
    }

}