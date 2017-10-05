<?php


class Family
{
private $people=[];
/**
 * @var Person
 */
private $oldestMember=null;

function addPerson(Person $person){
    $this->people[]=$person;

    if($this->oldestMember==null || $person->getAge()>$this->oldestMember->getAge()){
        $this->oldestMember=$person;
    }
}
function getOldestMember(){
    return $this->oldestMember;
}
}