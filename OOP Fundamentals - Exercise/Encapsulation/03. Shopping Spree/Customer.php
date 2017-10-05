<?php


class Customer
{
private $name;
private $money;
private $bag=[];

    function __construct($name,$money)
{
    $this->setName($name);
    $this->setMoney($money);
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
    public function getMoney()
    {
        return $this->money;
    }

    public function setName($name)
    {
        if($name==""){
            throw new Exception("Name cannot be empty");
        }
        $this->name = $name;
    }


    public function setMoney($money)
    {
        if($money<0){
            throw new Exception("Money cannot be negative");
        }
        $this->money = $money;
    }

    public function buyProduct(Product $product){
       if($this->money<$product->getPrice()){
           return false;
       }
       $this->money-=$product->getPrice();
       $this->bag[]=$product;

       return true;
    }

    function __toString()
    {
        $output=$this->name." - ";
        if(count($this->bag)===0){
            return $output."Nothing bought";
        }

        return $output . implode(", ",
                array_map(
                    function (Product $product) {
                        return $product->getName();
                    },
                    $this->bag));

    }

}