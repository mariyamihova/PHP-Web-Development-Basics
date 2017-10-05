<?php


class Pokemon
{
private $pokemonName;
private $pokemonType;


function __construct($pokemonName,$pokemonType)
{
    $this->pokemonName=$pokemonName;
    $this->pokemonType=$pokemonType;
}

    function __toString()
{
    return "{$this->pokemonName} {$this->pokemonType}";
}
}