<?php

include "IPassword.php";
class Archangel implements IPassword
{
    private $username;
    private $mana;
    private $level;

    private $hashedPassword;

    /**
     * Archangel constructor.
     * @param $username
     * @param $mana
     * @param $level
     */
    public function __construct($username, $mana, $level)
    {
        $this->username = $username;
        $this->mana = $mana;
        $this->level = $level;
    }

    public function getPassword()
    {
        return $this->hashedPassword;
    }

    public function generatePassword($username)
    {
        $output=strrev($username).strlen($username)*21;
        $this->hashedPassword=$output;
    }


}