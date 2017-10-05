<?php
include "Child.php";

$children=[];
$children[]=new Child("Ivan",14);
$children[]=new Child("Charlotte",12);
$children[]=new Child("Atanas",13);
$children[]=new Child("Ivaylo",12);

foreach ($children as $child){
    echo $child->getName()." -> ".$child->getAge()."\n";
}