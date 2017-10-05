<?php
class Person
{
    private $name;
    private $age;

    function __construct($a, $b)
    {
        $this->name = $a;
        $this->age = $b;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }


}
$num = intval(trim(fgets(STDIN)));

$persons = [];

for ($i = 0; $i < $num; $i++) {
    $input = explode(" ", trim(fgets(STDIN)));
    $name = $input[0];
    $age = intval($input[1]);
    $persons[] = new Person($name, $age);
}
$filteredPersons = array_filter($persons, function (Person $person) {
    return $person->getAge() > 30;
});
usort($filteredPersons, function (Person $person1, Person $person2) {
    return $person1->getName() <=> $person2->getName();
});
foreach ($filteredPersons as $person) {
    echo $person->getName()." - ".$person->getAge(). "\n";
}