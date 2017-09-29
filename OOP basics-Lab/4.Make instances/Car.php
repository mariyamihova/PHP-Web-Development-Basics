<?php


class Car
{
    public $brand;
    public $model;
    public $year;

    function __construct($brand,$model,$year)
    {
        if($brand!=" "&&$model!=" "&& is_numeric($year)){
            $this->brand=$brand;
            $this->model=$model;
            $this->year=$year;
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
$allCars=[];
for($i=0;$i<4;$i++){

    $inputLine=explode(" ",trim(fgets(STDIN)));

    $allCars[]=new Car($inputLine[0],$inputLine[1],$inputLine[2]);
}

usort($allCars, function($a,$b){
    if($a->brand==$b->brand){
        if($a->model==$b->model){
            if($a->year==$b->year){
                return 0;
            }else{return ($a->year>$b->year)? +1:-1;}
        }else{return ($a->model>$b->model)? +1:-1;}

    }
    return ($a->brand>$b->brand)? +1:-1;
});

foreach ($allCars as $key=>$value){

    echo $value->getBrand().", ".$value->getModel().", ".$value->getYear()."\n";
}
