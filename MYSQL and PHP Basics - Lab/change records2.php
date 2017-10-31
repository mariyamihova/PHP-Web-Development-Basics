<?php

$db=new PDO('mysql:host=localhost;dbname=school','root','',Array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$studentInfo=explode(" ",trim(fgets(STDIN)));

$id=$studentInfo[0];
$param_name=$studentInfo[1];
$param_value=$studentInfo[2];

$db_stm=$db->prepare("UPDATE students SET `$param_name`=:param_value WHERE id=:id");


//$db_stm->bindParam('param_name',$param_name);
$db_stm->bindParam('param_value',$param_value);
$db_stm->bindParam('id',$id);

$db_stm->execute();



