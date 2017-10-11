<?php

include "ICharacter.php";
abstract class Character implements ICharacter
{
    private $username;
    private $level;

    protected $hashedPassword;

    /**
     * Character constructor.
     * @param $username
     * @param $level
     */
    public function __construct($username, $level)
    {
        $this->setUsername($username);
        $this->setLevel($level);
    }


    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername(string $username)
    {
        $this->username = $username;
    }

    public function getHashedPassword()
    {
        return $this->hashedPassword;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function setLevel(int $level)
    {
        $this->level = $level;
    }

    function __toString()
    {
        return '"' . $this->getUsername() . '" | "' . $this->getHashedPassword() . '" -> ' . basename(get_class($this));
    }
}