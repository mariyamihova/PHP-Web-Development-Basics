<?php

class Employee
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
        if(count($inputLine)<=6){
            throw new Exception("Error: Please, check your input syntax");
        }
        $fname=$inputLine[0];
        $mname=$inputLine[1];
        $lname=$inputLine[2];
        $department=$inputLine[3];
        $position=$inputLine[4];
        $passInfo=explode(" ",$inputLine[5]);
        $passNum=$passInfo[1];
       $this->addEmployee($fname,$mname,$lname,$department,$position,$passNum);
    }
    public function addEmployee($fname,$mname,$lname,$department,$position,$passNum){
        $db_stm=$this->dbi->prepare('INSERT INTO employees (first_name,middle_name,last_name,department,position,passport_id)
VALUES (:first_name,:middle_name,:last_name,:department,:position,:passport_id)');
        //$db_stm->bindParam('id',$id);
        $db_stm->bindParam('first_name',$fname);
        $db_stm->bindParam('middle_name',$mname);
        $db_stm->bindParam('last_name',$lname);
        $db_stm->bindParam('department',$department);
        $db_stm->bindParam('position',$position);
        $db_stm->bindParam('passport_id',$passNum);
        $db_stm->execute();
    }
    public function readEmails(){

        $inputLine=explode(", ",trim(fgets(STDIN)));


        if(count($inputLine)<7){
            echo "Error: Please check your input email syntax.";

        }else{
            $fname=$inputLine[0];
            $mname=$inputLine[1];
            $lname=$inputLine[2];

            $id=$this->getEmployeeID($fname,$mname,$lname);


            $emailInfo=explode(": ",$inputLine[4]);
            $emailType=$emailInfo[0];
            $address=$emailInfo[1];

            $this->addEmail($address,$emailType,$id);

            $workemailInfo=explode(": ",$inputLine[5]);
            $workemailType=$workemailInfo[0];
            $workaddress=$workemailInfo[1];

            $this->addEmail($workaddress,$workemailType,$id);

            $workemailInfo2=explode(": ",$inputLine[6]);
            $workemailType2=$workemailInfo2[0];
            $workaddress2=$workemailInfo2[1];

            $this->addEmail($workaddress2,$workemailType,$id);
            echo "Email of {$fname} {$mname} {$lname} saved.";
        }




    }
    public function getEmployeeID($fname,$mname,$lname)
    {
        $result = $this->dbi->prepare('SELECT employee_id FROM employees WHERE first_name=? AND middle_name=? AND last_name=?');
        $result->execute(array($fname,$mname,$lname));
        $row = $result->fetch(PDO::FETCH_ASSOC);
        return $row['employee_id'];
    }
    public function addEmail($address,$type,$id){
        $db_stm=$this->dbi->prepare('INSERT INTO employee_emails (email_address,email_type,employee_id)
VALUES (?,?,?)');

        $db_stm->execute(array($address,$type,$id));

    }

    public function readPhones(){
        $inputLine=explode(", ",trim(fgets(STDIN)));


        if(count($inputLine)<7){
            echo "Error: Please check your input email syntax.";

        }else{
            $fname=$inputLine[0];
            $mname=$inputLine[1];
            $lname=$inputLine[2];

            $id=$this->getEmployeeID($fname,$mname,$lname);


            $phoneInfo=explode(": ",$inputLine[4]);
            $phoneType=$phoneInfo[0];
            $phoneNum=$phoneInfo[1];

            $this->addPhone($phoneType,$phoneNum,$id);

            $workphoneInfo=explode(": ",$inputLine[5]);
            $workType=$workphoneInfo[0];
            $workNum=$workphoneInfo[1];

            $this->addPhone($workType,$workNum,$id);

            $workphoneInfo2=explode(": ",$inputLine[6]);
            $workType2=$workphoneInfo2[0];
            $workNum2=$workphoneInfo2[1];

            $this->addPhone($workType2,$workNum2,$id);
            echo "Phone numbers of {$fname} {$mname} {$lname} saved.";
        }

    }
    public function addPhone($type,$number,$id){
        $db_stm=$this->dbi->prepare('INSERT INTO employee_phones (phone_type,phone_number,employee_id)
VALUES (?,?,?)');

        $db_stm->execute(array($type,$number,$id));

    }

    public function readNames(){
        $inputLine=explode(", ",trim(fgets(STDIN)));
        $fname=$inputLine[1];
        $mname=$inputLine[2];
        $lname=$inputLine[3];

        $id=$this->getEmployeeID($fname,$mname,$lname);
        $this->getEmails($id);
    }
    public function getEmails($id){
        $result = $this->dbi->prepare('SELECT email_address,email_type FROM employee_emails WHERE employee_id=?');
        $result->execute(array($id));
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo $row['email_type']." - ".$row['email_address']."\n";
        }

    }
    public function readEmplName(){
        $inputLine=explode(", ",trim(fgets(STDIN)));
        $fname=$inputLine[1];
        $mname=$inputLine[2];
        $lname=$inputLine[3];

        $id=$this->getEmployeeID($fname,$mname,$lname);
        $this->getEmailsandPhones($id);
    }
    public function getEmailsandPhones($id){
        $result = $this->dbi->prepare('SELECT email_type, email_address,phone_type,phone_number from employee_emails
right join employee_phones using (employee_id)
where employee_id=?;');
        $result->execute(array($id));
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo $row['email_type']." email - ".$row['email_address']."\n";
            echo $row['phone_type']." phone - ".$row['phone_number']."\n";
        }

    }
    public function findCountry(){
        $inputLine=explode(", ",trim(fgets(STDIN)));
        $fname=$inputLine[1];
        $mname=$inputLine[2];
        $lname=$inputLine[3];

        $id=$this->getEmployeeID($fname,$mname,$lname);
        $this->getCountryCode($id);
    }
    public function getCountryCode($id)
    {
        $result = $this->dbi->prepare('SELECT native_country from employees WHERE employee_id=?');
        $result->execute(array($id));
        $country=null;
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $country=$row['native_country'];
            echo "Employee country {$country} - ";
        }

        $countryCode=$this->dbi->prepare('SELECT country_code from countries WHERE country_name=?');
        $countryCode->execute(array($country));
        while ($row = $countryCode->fetch(PDO::FETCH_ASSOC)) {
            echo $row['country_code'];
        }
    }
    public function getPassId(){
        $inputLine=explode(", ",trim(fgets(STDIN)));
        $fname=$inputLine[1];
        $mname=$inputLine[2];
        $lname=$inputLine[3];

        $id=$this->getEmployeeID($fname,$mname,$lname);

        $passId=$this->dbi->prepare('SELECT passport_id from employees WHERE employee_id=?');
        $passId->execute(array($id));
        while ($row = $passId->fetch(PDO::FETCH_ASSOC)) {
            echo $row['passport_id'];
        }
    }
    public function getEmployeeInfo(){
        $inputLine=explode(", ",trim(fgets(STDIN)));
        $likeClause=$inputLine[1];

        $info=$this->dbi->prepare('SELECT employee_id,first_name,middle_name,last_name,department,position from employees WHERE first_name LIKE \'%{$likeClause}%\'');
        $info->execute(array($likeClause));
        while ($row = $info->fetch(PDO::FETCH_ASSOC)) {
            print_r($row);
        }

    }
}