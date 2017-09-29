<?php
$myAnonObj=new stdClass();
$myAnonObj->name="Stefan";
$myAnonObj->lastname="Schneider";
$myAnonObj->age="30";
$myAnonObj->weight="70";
$myAnonObj->bmi="22.8";
$myAnonObj->haircolor="blond";
$myAnonObj->bloodgroup="B+";
$myAnonObj->country="Germany";
$myAnonObj->city="Freiburg";
$myAnonObj->status="married";

foreach ($myAnonObj as $key=>$value){
    echo $key." -> ".$value."\n";
}