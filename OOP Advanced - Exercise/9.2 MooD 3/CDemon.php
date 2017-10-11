<?php


class CDemon extends Character

{
    private $specialPoints;

    public function __construct(string $username, int $level, int $specialPoints)
    {
        parent::__construct($username, $level);
        $this->setSpecialPoints($specialPoints);
        $this->setHashedPassword();
    }

    public function getSpecialPoints()
    {
        return $this->specialPoints;
    }

    public function setSpecialPoints($points)
    {
        $this->specialPoints=$points;
    }
    private function setHashedPassword()
    {
        $this->hashedPassword = strlen($this->getUsername()) * 217;
    }
    function __toString()
    {
        return parent::__toString() . PHP_EOL
            . number_format(ceil($this->specialPoints * $this->getLevel()), 1, ".", "");
    }
}