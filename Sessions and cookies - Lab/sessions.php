<?php
session_start();
if(isset($_GET['lname'])){
    echo "Your name is: ".$_GET['lname'];
    $_SESSION['lname']=$_GET['lname'];
}else if(isset($_SESSION['lname'])){
    echo "Hello, ".$_SESSION['lname'];
}
else{
    echo 'What is your name: <form><input type ="text" name="lname"/>?</form>';
}

session_destroy();
