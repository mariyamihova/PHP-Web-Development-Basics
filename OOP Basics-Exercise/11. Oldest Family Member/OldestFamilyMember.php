<?php
include "Person.php";
include "Family.php";

$family=new Family();

$n=intval(trim(fgets(STDIN)));

for($i=0;$i<$n;$i++){

    $data=explode(" ",trim(fgets(STDIN)));

    $familyMember=new Person($data[0],$data[1]);

    $family->addPerson($familyMember);
}
echo $family->getOldestMember();