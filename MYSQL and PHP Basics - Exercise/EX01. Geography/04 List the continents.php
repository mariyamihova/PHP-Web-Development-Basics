<?php
$db=new PDO('mysql:host=localhost;dbname=geography','root','');
$continents = $db->query("SELECT * FROM `continents`");

foreach($continents as $continent){
    echo $continent['continent_name']." "."({$continent['continent_code']}) ";

}