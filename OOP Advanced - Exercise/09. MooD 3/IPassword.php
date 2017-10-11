<?php


interface IPassword
{

    public function getPassword();
    public function generatePassword($username);

}