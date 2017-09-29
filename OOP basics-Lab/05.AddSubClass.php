<?php
class Car
{
    public $brand;
    public $model;
    public $year;

    function __construct($brand,$model,$engine,$seats,$horses,$year)
    {
        if($brand!=" "&&$model!=" "&& is_numeric($year)){
            $this->brand=$brand;
            $this->model=new Model($engine,$seats,$horses);
            $this->year=$year;
        }

    }

}
class Model{
    public $engine;
    public $seatsNum;
    public $horsePower;

    function __construct($engine,$seatsNum,$horsePower)
    {
        $this->engine=$engine;
        $this->seatsNum=$seatsNum;
        $this->horsePower=$horsePower;
    }
}

$myCar=new Car('Nissan','X-trail',12,6,1800,2007);
print_r($myCar);