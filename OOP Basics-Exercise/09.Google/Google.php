<?php
include "Car.php";
include "Company.php";
include "Pokemon.php";
include "Parents.php";
include "Children.php";
include "Person.php";

$inputLine=explode(" ",trim(fgets(STDIN)));
$people=[];
while ($inputLine[0]!="End"){

    $personName=$inputLine[0];
    $person=null;

    if(!array_key_exists($personName,$people)) {
        $person=new Person($personName);
        $people[$personName] = $person;
    }else{
        $person=$people[$personName];
    }

    if($inputLine[1]=="company"){
        $name=$inputLine[2];
        $department=$inputLine[3];
        $salary=$inputLine[4];
        $company=new Company($name,$department,$salary);

        $person->setCompany($company);


    }else if($inputLine[1]=="car"){

        $name=$inputLine[2];
        $speed=$inputLine[3];
        $car=new Car($name,$speed);

        $person->setCar($car);

    }else if($inputLine[1]=="pokemon"){

        $name=$inputLine[2];
        $type=$inputLine[3];

        $pokemon=new Pokemon($name,$type);

        $person->addPokemon($pokemon);

    }else if($inputLine[1]=="parents"){
        $name=$inputLine[2];
        $birthDate=$inputLine[3];
        $parent=new Parents($name,$birthDate);

        $person->addParent($parent);

    }else if($inputLine[1]=="children"){
        $name=$inputLine[2];
        $birthDate=$inputLine[3];
        $child=new Children($name,$birthDate);

        $person->addChild($child);
    }


    $inputLine=explode(" ",trim(fgets(STDIN)));

}

$personToPrinted=trim(fgets(STDIN));
echo $people[$personToPrinted];
