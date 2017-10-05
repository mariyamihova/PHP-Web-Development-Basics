<?php
class Person{
    public $name;
    public $age;


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function getAge()
    {
        return $this->age;
    }


    public function setAge($age)
    {
        $this->age = $age;
    }


}
$person=new Person();
echo(count(get_object_vars($person)));
echo "\n";

$person1=new Person();
$person1->name="Pesho";
$person1->age="18";

print_r($person1);

$person2=new Person();
$person2->name="Gosho";
$person2->age="20";

print_r($person2);

$person3=new Person();
$person3->name="Stamat";
$person3->age="43";

print_r($person3);