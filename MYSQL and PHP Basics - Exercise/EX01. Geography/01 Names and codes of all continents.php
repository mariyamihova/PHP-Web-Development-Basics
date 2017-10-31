<?php

$db=new PDO('mysql:host=localhost;dbname=geography','root','');
$continents = $db->query("SELECT * FROM `continents`");

foreach($continents as $i => $continent){
    print_r($continent);
    echo("\n\r");
}

