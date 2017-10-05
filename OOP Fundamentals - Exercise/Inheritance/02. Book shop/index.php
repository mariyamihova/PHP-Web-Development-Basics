<?php
include "Book.php";
include "GoldenEditionBook.php";

$author=trim(fgets(STDIN));
$title=trim(fgets(STDIN));
$price=floatval(trim(fgets(STDIN)));
$type=trim(fgets(STDIN));

try{
    $book=null;
    if($type=="STANDARD"){
        $book=new Book($title,$author,$price);
    }else if($type=="GOLD"){
        $book=new GoldenEditionBook($title,$author,$price);
    }else{
        throw new Exception("Type is not valid");
    }

    echo "OK\n";
    echo "{$book->getPrice()}";

}catch (Exception $ex){
    echo $ex->getMessage();
}