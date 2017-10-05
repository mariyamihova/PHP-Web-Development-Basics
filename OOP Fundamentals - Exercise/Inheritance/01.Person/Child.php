<?php

include "Person.php";
class Child extends Customer
{
protected function setAge($age){
    if($age>=15){
        throw new Exception("Child's age must be less than 15!");
    }else{
        parent::setAge($age);
    }
}

}