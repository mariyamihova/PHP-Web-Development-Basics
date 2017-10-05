<?php


class Person
{
    private $name;

    private $company=null;
    private $car=null;
    private $pokemons = [];
    private $parents = [];
    private $children = [];

    function __construct($name)
    {
        $this->name = $name;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setCompany(Company $company)
    {
        $this->company = $company;
    }


    public function setCar(Car $car)
    {
        $this->car = $car;
    }

    public function addPokemon(Pokemon $pokemon){
        $this->pokemons[] = $pokemon;
    }
    public function addParent(Parents $parent){
        $this->parents[] = $parent;
    }
    public function addChild(Children $child){
        $this->children[] = $child;
    }
    public function __toString(): string
    {
        $output = "{$this->name}" . PHP_EOL;
        $output .= "Company:" . PHP_EOL;
        $output .= $this->company != null ? $this->company . PHP_EOL : "";
        $output .= "Car:" . PHP_EOL;
        $output .= $this->car != null ? $this->car . PHP_EOL : "";
        $output .= "Pokemon:" . PHP_EOL;
        foreach ($this->pokemons as $pokemon) {
            $output .= $pokemon . PHP_EOL;
        }
        $output .= "Parents:" . PHP_EOL;
        foreach ($this->parents as $parent) {
            $output .= $parent . PHP_EOL;
        }
        $output .= "Children:" . PHP_EOL;
        foreach ($this->children as $child) {
            $output .= $child . PHP_EOL;
        }
        return $output;
    }
}