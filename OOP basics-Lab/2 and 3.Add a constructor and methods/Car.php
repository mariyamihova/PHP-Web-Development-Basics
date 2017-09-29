<?php


class Car
{
private $brand;
private $model;
private $year;

function __construct($brand,$model)
{
    $this->brand=$brand;
    $this->model=$model;

}

    public function setYear($year)
    {
        if(is_numeric($year)){
            $this->year = $year;
        }

    }


    public function getBrand()
    {
        return $this->brand;
    }


    public function getModel()
    {
        return $this->model;
    }


    public function getYear()
    {
        return $this->year;
    }


}

$myCar=new Car("Opel","Astra");
$myCar->setYear(1999);
print_r($myCar);