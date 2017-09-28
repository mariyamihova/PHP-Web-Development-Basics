<?php
$groupSize=20;
$type="Platinum";

if($groupSize<=50){
    $hallPrice=2500;
    echo "We can offer you the Small Hall"."<br>";
    if($type=="Normal"){
        $totalPrice=500+$hallPrice;
        $discount=$totalPrice-(0.05*$totalPrice);


    }else if($type=="Gold"){
        $totalPrice=750+$hallPrice;
        $discount=$totalPrice-(0.10*$totalPrice);
    }else{
        $totalPrice=1000+$hallPrice;
        $discount=$totalPrice-(0.15*$totalPrice);
    }

    $pricePerPerson=number_format($discount/$groupSize,2);
    echo "The price per person is {$pricePerPerson}$";

}else if($groupSize>50 && $groupSize<=100){
    $hallPrice=5000;
    echo "We can offer you the Terrace"."<br>";

    if($type=="Normal"){
        $totalPrice=500+$hallPrice;
        $discount=$totalPrice-(0.05*$totalPrice);


    }else if($type=="Gold"){
        $totalPrice=750+$hallPrice;
        $discount=$totalPrice-(0.10*$totalPrice);
    }else{
        $totalPrice=1000+$hallPrice;
        $discount=$totalPrice-(0.15*$totalPrice);
    }

    $pricePerPerson=number_format($discount/$groupSize,2);
    echo "The price per person is {$pricePerPerson}$";

}else if($groupSize>100 && $groupSize<=120){
    $hallPrice=7500;
    echo "We can offer you the Great Hall"."<br>";

    if($type=="Normal"){
        $totalPrice=500+$hallPrice;
        $discount=$totalPrice-(0.05*$totalPrice);


    }else if($type=="Gold"){
        $totalPrice=750+$hallPrice;
        $discount=$totalPrice-(0.10*$totalPrice);
    }else{
        $totalPrice=1000+$hallPrice;
        $discount=$totalPrice-(0.15*$totalPrice);
    }

    $pricePerPerson=number_format($discount/$groupSize,2);
    echo "The price per person is {$pricePerPerson}$";
}else{
    echo "We do not have an approproiate hall.";
}


