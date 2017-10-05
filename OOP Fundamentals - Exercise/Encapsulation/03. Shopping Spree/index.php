<?php
include "Customer.php";
include "Product.php";

$customersInfo=explode(";",trim(fgets(STDIN)));
$productsInfo=explode(";",trim(fgets(STDIN)));

$customers=[];
$products=[];
try{
    for($i=0;$i<count($customersInfo)-1;$i++){

        $customData=explode("=",$customersInfo[$i]);
        $productData=explode("=",$productsInfo[$i]);

        $customers[]=new Customer($customData[0],$customData[1]);
        $products[]=new Product($productData[0],$productData[1]);

    }

//print_r($customers);
//print_r($products);

    $inputLine=explode(" ",trim(fgets(STDIN)));

    while($inputLine[0]!="END") {

        $name = $inputLine[0];
        $productName = $inputLine[1];


        $product=null;
        foreach ($products as $prod){
            if($prod->getName()==$productName){
                $product=new Product($productName,$prod->getPrice());
            }
        }

        foreach ($customers as $custom){
            if($custom->getName()==$name){
                if($custom->buyProduct($product)){
                    echo "{$custom->getName()} bought {$product->getName()}"."\n";
                }else{
                    echo "{$custom->getName()} can't afford {$product->getName()}"."\n";
                }
            }
        }

        $inputLine=explode(" ",trim(fgets(STDIN)));
    }
    foreach ($customers as $cust){
        echo $cust."\n";
    }
}catch (Exception $e){
    echo $e->getMessage();
}
