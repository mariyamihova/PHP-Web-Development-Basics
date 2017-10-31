<?php
$db=new PDO('mysql:host=localhost;dbname=test','root','',Array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
try{
    $db->beginTransaction();
    $db_stm=$db->prepare('INSERT INTO users (user_name) VALUE (:user_name)');
    $user_name='gosho';
    $db_stm->bindParam('user_name',$user_name);
    $db_stm->execute();

    $user_name='gosho2';
    echo $db->lastInsertId()."\n";
    $db_stm->execute();

    echo $db->lastInsertId()."\n";
    $db->commit();
}catch (PDOException $ex){
    $db->rollBack();
    echo "Error!".$ex->getMessage()."\n";
}
