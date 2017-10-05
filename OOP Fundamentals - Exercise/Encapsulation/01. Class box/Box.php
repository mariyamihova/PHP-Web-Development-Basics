<?php


class Box
{

    private $length;
    private $width;
    private $height;

    /**
     * Box constructor.
     * @param $length
     * @param $width
     * @param $height
     */
    public function __construct($length, $width, $height)
    {
        $this->setLength($length);
        $this->setWidth($width);
        $this->setHeight($height);
    }


    protected function setLength($length)
    {
        $this->length = $length;
    }


    protected function setWidth($width)
    {
        $this->width = $width;
    }


    protected function setHeight($height)
    {
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