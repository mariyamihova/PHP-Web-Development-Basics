<?php

$input=trim(fgets(STDIN));
$db=new PDO('mysql:host=localhost;dbname=geography','root','');

$capital=null;
if(mb_strlen($input)==2){
    $stmt = $db->prepare("
  SELECT `capital`,`country_name`
    FROM `countries`
    WHERE `country_code` = ?");
    if ($stmt->execute(array($input))) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "Country: ".$row['country_name']."\n";
           echo "Capital: ".$row['capital'];
        }
    }

}else if (mb_strlen($input)==3){
    $stmt = $db->prepare("
  SELECT `capital`,`country_name`
    FROM `countries`
    WHERE `iso_code` = ?");
    if ($stmt->execute(array($input))) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "Country: ".$row['country_name']."\n";
            echo "Capital: ".$row['capital'];
        }
    }
}else{
    $stmt = $db->prepare("
  SELECT `capital` 
    FROM `countries`
    WHERE `country_name` = ?");
    if ($stmt->execute(array($input))) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "Country: {$input}"."\n";
            echo "Capital: ".$row['capital'];
        }
    }
}

