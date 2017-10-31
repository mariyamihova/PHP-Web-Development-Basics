<?php
$db=new PDO('mysql:host=localhost;dbname=school','root','');

$num=intval(trim(fgets(STDIN)));

for($i=0;$i<$num;$i++){

    $studentInfo=explode(" ",trim(fgets(STDIN)));
    $first_name=$studentInfo[0];
    $last_name=$studentInfo[1];

    if(count($studentInfo)==3){
        $student_number=$studentInfo[2];
        $phone_number=NULL;
    }else{
        $student_number=$studentInfo[2];
        $phone_number=$studentInfo[3];
    }


    $db_stm=$db->prepare('INSERT INTO students (first_name,last_name,student_number, phone_number)VALUES (:first_name,:last_name,:student_number,:phone_number)');
    $db_stm->bindParam('first_name',$first_name);
    $db_stm->bindParam('last_name',$last_name);
    $db_stm->bindParam('student_number',$student_number);
    $db_stm->bindParam('phone_number',$phone_number);
    $db_stm->execute();

}





