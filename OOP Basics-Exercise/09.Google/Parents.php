<?php


class Parents
{
private $parentName;
private $parentBirthday;

    public function __construct($parentName, $parentBirthday)
    {
        $this->parentName = $parentName;
        $this->parentBirthday = $parentBirthday;
    }

    function __toString()
{
    return "{$this->parentName} {$this->parentBirthday}";
}
}