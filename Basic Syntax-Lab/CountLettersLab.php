
<?php
$inputLine="softuni";
$lettersCount=[];

$length=strlen($inputLine);

for($i=0;$i<$length;$i++){
    if(!array_key_exists($inputLine[$i],$lettersCount)){
        $lettersCount[$inputLine[$i]]=0;
    }
    $lettersCount[$inputLine[$i]]++;

}
arsort($lettersCount);
ksort($lettersCount);
foreach ($lettersCount as $letter => $count) {
    echo $letter.' => '.$count .'<br>';
}

?>