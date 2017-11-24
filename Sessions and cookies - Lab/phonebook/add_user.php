<?php
session_start();
include "add_user_frontend.php";

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];

    $_SESSION['user'][]=[
        'name'=>$name,
        'phone'=>$phone
    ];

    header("Location:list.php");
    exit;
}

