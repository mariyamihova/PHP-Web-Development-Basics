<?php
$array=['Ge', 'Ch', 'O', 'Ne', 'Nb', 'Mo', 'Tc', 'O', 'Ne'];
$elements=[];
for($i=0;$i<count($array);$i++){
    $element=$array[$i];

        if(isset($elements[$element])){
            $elements[$element]++;
        }else{
            $elements[$element]=1;
        }

}
foreach ($elements as $key=>$value){
    if($value==1){
        echo $key." ";
    }
}
?>