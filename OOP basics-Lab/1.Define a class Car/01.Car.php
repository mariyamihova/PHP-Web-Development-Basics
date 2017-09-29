<?php


class Car
{
public $brand;
public $model;
public $year;

}

$car1=new Car;
$car1->brand="Opel";
$car1->model="Astra";
$car1->year=1998;

$car2=new Car;
$car2->brand="abc";
$car2->model="def";
$car2->year="1999";

$car3=new Car;
$car3->brand="abc";
$car3->model="def";
$car3->year="1999";

print_r($car1);
print_r($car2);
print_r($car3);