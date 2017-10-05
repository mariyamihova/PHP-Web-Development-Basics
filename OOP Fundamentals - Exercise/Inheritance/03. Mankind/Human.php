<?php


class Human
{

    private $firstName;
    private $lastName;


    public function __construct($firstName, $lastName)
    {
        $this-> setFirstName($firstName);
        $this->setLastName($lastName);
    }


    protected function setFirstName($firstName)
    {
        if($firstName[0]!==strtoupper($firstName[0])){
            throw new Exception("Expected upper case letter!Argument: firstName");
        }
        if(strlen($firstName)<4){
            throw new Exception("Expected length at least 4 symbols!Argument: firstName");
        }
        $this->firstName = $firstName;
    }


    protected function setLastName($lastName)
    {
        if($lastName[0]!==strtoupper($lastName[0])){
            throw new Exception("Expected upper case letter!Argument: lastName");
        }
        if(strlen($lastName)<3){
            throw new Exception("Expected length at least 3 symbols!Argument: lastName");
        }
        $this->lastName = $lastName;
    }


function __toString()
{
    $output="First Name: {$this->firstName}"."\n";
    $output.="Last Name: {$this->lastName}"."\n";
    return $output;
}
}

