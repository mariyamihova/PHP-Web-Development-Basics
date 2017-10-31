<?php

$input=trim(fgets(STDIN));

$db=new PDO('mysql:host=localhost;dbname=geography','root','');


$stmt1 = $db->prepare("
  SELECT `capital`,`country_name`,`currency_code`,`continent_code`
    FROM `countries`
    WHERE `country_code` = ?");

if ($stmt1->execute(array($input))) {
    while ($row = $stmt1->fetch(PDO::FETCH_ASSOC)) {
        //print_r($row);
        echo "Country: ".$row['country_name']."\n";
        echo "Capital: ".$row['capital']."\n";
        echo "Currency: ".$row['currency_code']."\n";
        echo "Continent: ".$row['continent_code']."\n";
    }
}
    $mountainId=null;
$stmt = $db->prepare("
  SELECT `mountain_id`
    FROM `mountains_countries`
    WHERE `country_code` = ?");
    if ($stmt->execute(array($input))) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if($row['mountain_id']!=null){
             $mountainId=$row['mountain_id'];
                echo"Forward customer for special offers!";
                break;
            }


        }
    }

$stmt3 = $db->prepare("
  SELECT `elevation`
    FROM `peaks`
    WHERE `mountain_id` = ?");
if ($stmt3->execute(array($mountainId))) {
    while ($row = $stmt3->fetch(PDO::FETCH_ASSOC)) {
        if($row['elevation']>4000){

            echo"Show high mountain special equipment offers!";
            break;
        }


    }
}