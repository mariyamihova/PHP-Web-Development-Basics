<?php
include "Human.php";
include "Student.php";
include "Worker.php";

$studentsInfo=explode(" ",trim(fgets(STDIN)));
$workersInfo=explode(" ",trim(fgets(STDIN)));

$humans=[];

try{

    $humans[]=new Student($studentsInfo[0],$studentsInfo[1],$studentsInfo[2]);
    $humans[]=new Worker($workersInfo[0],$workersInfo[1],$workersInfo[2],$workersInfo[3]);


    foreach ($humans as $human){
        echo $human;
    }

}catch (Exception $e){
    echo $e->getMessage();
}