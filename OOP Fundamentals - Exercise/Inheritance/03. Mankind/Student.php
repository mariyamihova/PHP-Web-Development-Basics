<?php


class Student extends Human
{
private $fnumber;
function __construct($firstName, $lastName,$fnumber)
{
    parent::__construct($firstName, $lastName);
    $this->setFnumber($fnumber);
}


   public function setFnumber($fnumber)
    {
        if(strlen($fnumber)<5||strlen($fnumber)>10){
            throw new Exception("Invalid faculty number");
        }
        $this->fnumber = $fnumber;
    }

function __toString()
{
    $output= parent::__toString();
    $output.="Faculty number: {$this->fnumber}"."\n";
    return $output."\n";
}
}