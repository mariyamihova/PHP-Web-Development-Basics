<?php
include "ICar.php";

class Ferrari implements ICar
{

    private $model="488-Spider";
    private $driversName;


    public function __construct($driversName)
    {

        $this->driversName = $driversName;
    }

    public function useBreaks()
    {
        return "Breaks!";
    }

    public function pushGasPedal()
    {
        return "Zadushavam sA!";
    }
    public function __toString()
    {
        return "{$this->model}/" . $this->useBreaks() . "/" . $this->pushGasPedal() . "/{$this->driversName}";
    }

}