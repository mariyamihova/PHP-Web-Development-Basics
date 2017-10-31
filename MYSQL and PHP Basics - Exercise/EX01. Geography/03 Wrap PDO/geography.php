<?php
include "geography_db.php";
include "mypdo.php";

try {
    $db = new MyPDO("mysql:dbname=$db_name;host=$db_host", $db_username, $db_password);
    $db->setErrorException();

    $continents = $db->query("SELECT * FROM `continents`");
    foreach ($continents as $i => $continent) {
        print_r($continent);
        echo("\n\r");
    }
    $continents = null;
    $db         = null;
} catch (PDOException $e) {
    print "PDO Error: " . $e->getMessage() . "<br/>";
}
