<?php

include "Writer.php";
class Notebook implements Keyboard,TouchPad,Mouse,Writer
{
    protected $processor;
    protected $ram;
    protected $operator;
    protected $canCall;
    protected $battery;

    protected $stdResolution="14mpx";
    public $writtenText;


    public function __construct($processor, $ram, $operator, $canCall, $battery)
    {
        $this->processor = $processor;
        $this->ram = $ram;
        $this->operator = $operator;
        $this->canCall = $canCall;
        $this->battery = $battery;
    }

    public function pressKey()
    {
        // TODO: Implement pressKey() method.
    }

    public function changeStatus()
    {
        // TODO: Implement changeStatus() method.
    }

    public function move()
    {
        // TODO: Implement move() method.
    }

    public function moveFinger()
    {
        // TODO: Implement moveFinger() method.
    }

    public function click()
    {
        // TODO: Implement click() method.
    }

    public function writeText()
    {
        return $this->writtenText;
    }


}