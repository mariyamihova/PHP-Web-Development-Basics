<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 6.11.2017 г.
 * Time: 16:28
 */

namespace App\Data;


class ContactDTO
{
    private $id;
    private $phoneNumber;
    private $firstName;
    private $lastName;


    public static function create($id=null,string $phoneNumber,string $firstName,string $lastName)
    {
        return (new ContactDTO())
        ->setId($id)
        ->setPhoneNumber($phoneNumber)
        ->setFirstName($firstName)
        ->setLastName($lastName);

    }


    public function getId()
    {
        return $this->id;
    }

     function setId($id):ContactDTO
    {
        $this->id = $id;
        return $this;
    }


    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }


    public function setPhoneNumber($phoneNumber):ContactDTO
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }


    public function getFirstName()
    {
        return $this->firstName;
    }


    public function setFirstName($firstName):ContactDTO
    {
        $this->firstName = $firstName;
        return $this;
    }


    public function getLastName()
    {
        return $this->lastName;
    }


    public function setLastName($lastName):ContactDTO
    {
        $this->lastName = $lastName;
        return $this;
    }



}