<?php
$db=new PDO('mysql:host=localhost;dbname=phpcourse','root','',Array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
try {
    $result = $db->query('CALL GetStudentsInfo', PDO::FETCH_ASSOC);
    foreach ($result as $row) {
        echo $row['name']." ".$row['student_number']." ".$row['course_name']."\n";
    }
}catch (PDOException $ex){

        echo "Error!".$ex->getMessage()."\n";
    }
