<?php



class Demon implements IPassword
{
    private $username;
    private $specialPoint;
    private $level;

    private $hashedPassword;

    /**
     * Demon constructor.
     * @param $username
     * @param $specialPoint
     * @param $level
     */
    public function __construct($username, $specialPoint, $level)
    {
        $this->username = $username;
        $this->specialPoint = $specialPoint;
        $this->level = $level;
    }


    public function generatePassword($username)
    {
        $this->hashedPassword=(strlen($username)*217);
    }
    public function getPassword()
    {
        return $this->hashedPassword;
    }





}