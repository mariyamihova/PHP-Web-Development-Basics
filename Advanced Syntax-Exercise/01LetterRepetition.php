<?php
$text="The quick brown fox jumps over the lazy dog";

$characters=[];

for($i=0;$i<strlen($text);$i++){
    $character=$text[$i];
    if(!isset($characters[$character])){
        $characters[$character]=0;
    }
        $characters[$character]++;

}
foreach ($characters as $key=>$value){
    echo $key." -> ".$value."<br>";
}