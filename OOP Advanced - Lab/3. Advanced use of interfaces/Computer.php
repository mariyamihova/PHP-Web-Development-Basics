<?php


abstract class Computer
{
 protected $processor;
 protected $ram;


    public function __construct($processor, $ram)
    {
        $this->processor = $processor;
        $this->ram = $ram;
    }


}