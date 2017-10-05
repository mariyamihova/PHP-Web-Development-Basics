<?php


class Book
{
private $title;
private $author;
private $price;


    public function __construct($title, $author, $price)
    {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setPrice($price);
    }


    public function getTitle()
    {
        return $this->title;
    }


    protected function setTitle($title)
    {
        if(strlen($title)<3){
            throw new Exception("Title not valid");
        }
        $this->title = $title;
    }


    public function getAuthor()
    {
        return $this->author;
    }


    protected function setAuthor($author)
    {
        $name=explode(" ",$author);
        if(is_numeric($name[1][0])){
            throw new Exception("Author not valid");
        }
        $this->author = $author;
    }

   public function getPrice()
    {
        return $this->price;
    }


    protected function setPrice($price)
    {
        if($price<=0){
            throw new Exception("Price not valid");
        }
        $this->price = $price;
    }

    function __toString()
    {
       return "{$this->title} {$this->author} {$this->price}"."\n";
    }

}