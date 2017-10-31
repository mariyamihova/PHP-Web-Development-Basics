<?php
//NOT FINISHED YET
$db=new PDO('mysql:host=localhost;dbname=geography','root','');
$continent=trim(fgets(STDIN));

$customersCountries = $db->query('SELECT country_name,concat(first_name, " ",last_name) as name FROM customers', PDO::FETCH_ASSOC);
$countries=[];
foreach ($customersCountries as $row){
    $country=$row['country_name'];
    //print_r($row);
    if(!array_key_exists($country,$countries)){
        $countries[$country]=[];
    }
    $countries[$country][]= $row['name'];
}
//array_unique($countries);
//print_r($countries);

$stmt = $db->prepare('select continent_name,country_name from continents
inner join countries using(continent_code)
where continent_name = ?');

if ($stmt->execute(array($continent))) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $country=$row['country_name'];
        if (array_key_exists($country,$countries)) {
            echo "Customers in {$country}:"."\n";
            foreach ($countries[$country] as $k=>$v){
                echo $v."\n";
            }

        }

    }

}

