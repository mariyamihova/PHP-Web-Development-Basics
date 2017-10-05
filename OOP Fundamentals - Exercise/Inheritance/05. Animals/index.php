<?php
include "Animal.php";
include "Cat.php";
include "Dog.php";
include "Frog.php";
include "Tomcat.php";
include "Kittens.php";

$type=explode(" ",trim(fgets(STDIN)));


$animals=[];
while($type[0]!=="Beast!"){
    try{
        $data=explode(" ",trim(fgets(STDIN)));

        switch ($type[0]){
            case"Cat":
                $animals["Cat"]=new Cat($data[0],$data[1],$data[2]);
                break;
            case"Dog":
                $animals["Dog"]=new Dog($data[0],$data[1],$data[2]);
                break;
            case"Frog":
                $animals["Frog"]=new Frog($data[0],$data[1],$data[2]);
                break;
            case"Tomcat":
                $animals["Tomcat"]=new Tomcat($data[0],$data[1],$data[2]);
                break;
            case"Kitten":
                $animals["Kitten"]=new Kittens($data[0],$data[1],$data[2]);
                break;
        }


    }catch (Exception $ex){
        echo $ex->getMessage();
    }

    $type=explode(" ",trim(fgets(STDIN)));
}

foreach ($animals as $k=>$v){
    echo $k." ".$v;
    echo $v->produceSound()."\n";
}