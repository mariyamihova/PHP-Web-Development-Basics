<?php


class Worker extends Human
{
private $weekSalary;
private $workHours;

function __construct($firstName, $lastName,$weekSalary,$workHours)
{
    parent::__construct($firstName, $lastName);
    $this->setWeekSalary($weekSalary);
    $this->setWorkHours($workHours);
}


    protected function setWeekSalary($weekSalary)
    {
        if($weekSalary<=10){
            throw new Exception("Expected value mismatch!Argument: weekSalary");
        }
        $this->weekSalary = $weekSalary;
    }


    protected function setWorkHours($workHours)
    {
        if($workHours<1||$workHours>12){
            throw new Exception("Expected value mismatch!Argument: workHoursPerDay");
        }
        $this->workHours = $workHours;
    }


    protected function setLastName($lastName)
    {
        if(strlen($lastName)<=3){
            throw new Exception("Expected length more than 3 symbols!Argument: lastName");
        }
        parent::setLastName($lastName);
    }

    private function calculateSalaryPerHour(){
    return $this->weekSalary/7/$this->workHours;
    }

    function __toString()
    {
        $output= parent::__toString();
        $output.="Week Salary: " .number_format($this->weekSalary,2,'.','')."\n";
        $output.="Hours per day: " .number_format($this->workHours,2,'.','')."\n";
        $output.="Salary per hour: ".number_format($this->calculateSalaryPerHour(),2,'.','')."\n";
        return $output."\n";
    }


}