<?php


class Person
{
private $name;

function __construct($name)
{
    $this->name=$name;
}

function sayHello(){
    return $this->name."says \"Hello\"!";
}
}