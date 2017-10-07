<?php


class Grandson extends Son
{
    public function getGenerationNum(){
        return 3;
    }
    public function __toString()
    {
        $output="3. Grandsons: ".$this->getName().", ".$this->getYearBirth()." - ".$this->getYearDeath().", lived {$this->getTimeLived()} years";
        return $output;
    }
}