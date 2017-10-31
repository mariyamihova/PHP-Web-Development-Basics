<?php
$db=new PDO('mysql:host=localhost;dbname=school','root','');


$id=intval(trim(fgets(STDIN)));

$db_stm=$db->prepare('DELETE FROM students WHERE id=:id');

$db_stm->bindParam('id',$id);

$db_stm->execute();

