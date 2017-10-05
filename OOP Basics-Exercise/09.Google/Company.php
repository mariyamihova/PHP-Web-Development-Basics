<?php


class Company
{
private $companyName;
private $department;
private $salary;

function __construct($companyName,$department,$salary)
{
    $this->companyName=$companyName;
    $this->department=$department;
    $this->salary=$salary;
}

function __toString()
{
    return "{$this->companyName} {$this->department} {$this->salary}"."\n";
}
}