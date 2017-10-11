<?php

include "Calling.php";
include "Browsing.php";
class Smartphone implements Calling,Browsing
{
    public  function browse($webAddress)
    {
        if (preg_match("/\\d/", $webAddress)) {
            throw new \Exception("Invalid URL!");
        }
        return "Browsing: {$webAddress}!"."\n";
    }

    public function call($phoneNumber)
    {
        if (!preg_match("/^[\\d]+$/", $phoneNumber)) {
            throw new \Exception("Invalid number!");
        }
        return "Calling... {$phoneNumber}"."\n";
    }

}