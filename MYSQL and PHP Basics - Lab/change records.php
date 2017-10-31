<?php
$db=new PDO('mysql:host=localhost;dbname=school','root','');



    $studentInfo=explode(" ",trim(fgets(STDIN)));
    $id=$studentInfo[0];
    $param_name=$studentInfo[1];
    $param_value=$studentInfo[2];
    $db_stm=null;

    if($param_name=="first_name"){
        $db_stm=$db->prepare('UPDATE students SET first_name=:param_value WHERE id=:id');
    }else if($param_name=="last_name"){
        $db_stm=$db->prepare('UPDATE students SET last_name=:param_value WHERE id=:id');
    }else if($param_name=="phone_number"){
        $db_stm=$db->prepare('UPDATE students SET phone_number=:param_value WHERE id=:id');
    }

    $db_stm->bindParam('param_value',$param_value);
    $db_stm->bindParam('id',$id);

    $db_stm->execute();

