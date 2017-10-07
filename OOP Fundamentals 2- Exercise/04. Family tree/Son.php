<?php


class Son extends Father
{
    public function getGenerationNum(){
        return 2;
    }
    public function __toString()
    {
        $output="2. Sons: ".$this->getName().", ".$this->getYearBirth()." - ".$this->getYearDeath().", lived {$this->getTimeLived()} years";
        return $output;
    }
}