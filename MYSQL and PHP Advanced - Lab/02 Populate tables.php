<?php
$db=new PDO('mysql:host=localhost;dbname=phpcourse','root','',Array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
try{

    $inputLine=explode(" ",trim(fgets(STDIN)));

    while($inputLine[0]!="End"){

        $first_name=$inputLine[0];
        $last_name=$inputLine[1];
        $student_number=$inputLine[2];
        $course_name=$inputLine[3];
        $db->beginTransaction();
        $db_stm=$db->prepare('INSERT INTO students (first_name,last_name,student_number) VALUE (:first_name,:last_name,:student_number)');

        $db_stm->bindParam('first_name',$first_name);
        $db_stm->bindParam('last_name',$last_name);
        $db_stm->bindParam('student_number',$student_number);
        $db_stm->execute();

        $db_stm=$db->prepare('INSERT INTO courses (course_name) VALUE (:course_name)');
        $db_stm->bindParam('course_name',$course_name);
        $db_stm->execute();

        $db->commit();

        $result = $db->prepare('SELECT course_id FROM courses WHERE course_name=?');
        $result->execute(array($course_name));
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $course_id= $row['course_id'];


        $result = $db->prepare('SELECT student_id FROM students WHERE student_number=?');
        $result->execute(array($student_number));
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $student_id= $row['student_id'];


        $db_stm=$db->prepare('INSERT INTO subscriptions (course_id,student_id) VALUE (:course_id,:student_id)');
        $db_stm->bindParam('course_id',$course_id);
        $db_stm->bindParam('student_id',$student_id);
        $db_stm->execute();


        $inputLine=explode(" ",trim(fgets(STDIN)));


    }

}catch (PDOException $ex){
    $db->rollBack();
    echo "Error!".$ex->getMessage()."\n";
}
