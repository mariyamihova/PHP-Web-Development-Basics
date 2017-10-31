<?php
$db=new PDO('mysql:host=localhost;dbname=geography','root','');
$continents = $db->query("SELECT * FROM `continents`");

//if we want to print out only the names of the continets:
foreach($continents as $continent){
    echo($continent['continent_name']);
    echo("\n\r");
}