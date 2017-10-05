<?php


class Tomcat extends Cat
{
    public function __construct($name, $age)
    {
        parent::__construct($name, $age, "male");
    }

    public function produceSound()
    {
        return "Give me one million b***h";
    }
}