<?php


interface ICharacter
{
    public function getUsername();
    public function setUsername(string $username);
    public function getHashedPassword();
    public function getLevel();
    public function setLevel(int $level);
    public function getSpecialPoints();
    public function setSpecialPoints($points);
}