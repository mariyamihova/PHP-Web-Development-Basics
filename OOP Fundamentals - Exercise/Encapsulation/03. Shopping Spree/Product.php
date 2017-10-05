<?php


class Product
{
    private $name;
    private $price;

    /**
     * Product constructor.
     * @param $name
     * @param $price
     */
    public function __construct($name, $price)
    {
        $this->setName($name);
        $this->setPrice($price) ;
    }


    public function setName($name)
    {
        if($name==""){
            throw new Exception("Name cannot be empty");
        }
        $this->name = $name;
    }


    public function setPrice($price)
    {
        if($price<0){
            throw new Exception("Money cannot be negative");
        }
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }


}