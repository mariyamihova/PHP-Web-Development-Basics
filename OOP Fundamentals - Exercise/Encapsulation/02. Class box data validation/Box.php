<?php


class Box
{

    private $length;
    private $width;
    private $height;


    public function __construct($length, $width, $height)
    {
        $this->setLength($length);
        $this->setWidth($width);
        $this->setHeight($height);
    }


    private function setLength($length)
    {
        if($length<=0){
            throw new Exception("Length cannot be negative or zero");
        }
        $this->length = $length;
    }


   private function setWidth($width)
    {
        if($width<=0){
            throw new Exception("Width cannot be negative or zero");
        }
        $this->width = $width;
    }


    private function setHeight($height)
    {
        if($height<=0){
            throw new Exception("Height cannot be negative or zero");
        }
        $this->height = $height;
    }

    public function getSurfaceArea(){
        return 2*$this->length*$this->width
            + 2*$this->length*$this->height
            +2*$this->width*$this->height;
    }
    public function getLateralSurfaceArea(){
        return 2*$this->length*$this->height
            +2*$this->width*$this->height;
    }
    public function getVolume(){
        return $this->length*$this->height*$this->width;
    }

    function __toString()
    {
        $output="Surface Area - ".number_format($this->getSurfaceArea(),2,'.','')."\n";
        $output.="Lateral Surface Area - ".number_format($this->getLateralSurfaceArea(),2,'.','')."\n";
        $output.="Volume - ".number_format($this->getVolume(),2,'.','')."\n";
        return $output;
    }
}