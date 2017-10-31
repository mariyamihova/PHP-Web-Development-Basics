<?php


class CallCenter
{
private $dbi=false;

public function connectDB(){
    $db=new Database();
    $this->dbi=$db->connect();
}

public function __construct()
{
    $this->connectDB();
}

public function main(){

    $inputLine=explode(", ",trim(fgets(STDIN)));
    //$id=0;
    while ($inputLine[0]!="end"){
        $country_name=$inputLine[0];
        $first_name=$inputLine[1];
        $last_name=$inputLine[2];
       // $id++;
        //echo $id;
        $this->addCustomer($first_name,$last_name,$country_name);

        $inputLine=explode(", ",trim(fgets(STDIN)));
    }
}
public function remove(){

    $input=explode(", ",trim(fgets(STDIN)));
    while($input[0]!="end"){
        $first_name=$input[1];
        $last_name=$input[2];

        $this->removeCustomer($first_name,$last_name);
        $input=explode(", ",trim(fgets(STDIN)));
    }

}
public function getCustomers(){
    $input=explode(" ",trim(fgets(STDIN)));
    while($input[0]!="end"){
        $country_name=$input[2];

        $this->getCustomersInCountry($country_name);
        $input=explode(" ",trim(fgets(STDIN)));
    }
}

public function addCustomer($first_name,$last_name,$country_name){
    $db_stm=$this->dbi->prepare('INSERT INTO customers (first_name,last_name,country_name)
VALUES (:first_name,:last_name,:country_name)');
    //$db_stm->bindParam('id',$id);
    $db_stm->bindParam('first_name',$first_name);
    $db_stm->bindParam('last_name',$last_name);
    $db_stm->bindParam('country_name',$country_name);
    $db_stm->execute();


}
public function removeCustomer($first_name,$last_name){
    $db_stm=$this->dbi->prepare('DELETE FROM customers WHERE first_name=:first_name AND last_name=:last_name');
    $db_stm->bindParam('first_name',$first_name);
    $db_stm->bindParam('last_name',$last_name);
    $db_stm->execute();
}

public function getCustomersInCountry($country_name){
    $db_stm=$this->dbi->prepare('SELECT CONCAT(first_name," ", last_name)AS `fullname` FROM customers WHERE country_name=?');
    if($db_stm->execute(array($country_name))){
        echo "Customers in {$country_name}: "."\n";
        while ($row = $db_stm->fetch(PDO::FETCH_ASSOC)){
            echo($row['fullname'])."\n";
        }
    }
}
}