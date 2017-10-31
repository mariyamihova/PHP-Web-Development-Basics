<?php
$input=trim(fgets(STDIN));

$db=new PDO('mysql:host=localhost;dbname=geography','root','');



if(mb_strlen($input)==2){
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
    $stmt = $db->prepare("
  SELECT `mountain_id`
    FROM `mountains_countries`
    WHERE `country_code` = ?");
    if ($stmt->execute(array($input))) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
           if($row['mountain_id']!=null){

               echo"Forward customer for special offers!";
               break;
           }


        }
    }}

