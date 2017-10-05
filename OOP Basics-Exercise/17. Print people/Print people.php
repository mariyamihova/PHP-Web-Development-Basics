<?php
include "Human.php";
$people=[];

$input=explode(" ",trim(fgets(STDIN)));

while ($input[0]!="END"){

    $people[]=new Human($input[0],$input[1],$input[2]);

    $input=explode(" ",trim(fgets(STDIN)));

}
usort($people,function(Human $a, Human $b){
    return $a->getAge()<=>$b->getAge();
});
foreach ($people as $human){
    echo $human;
}