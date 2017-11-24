<?php
if(isset($_GET['first_name'])){
    echo "Your name is: ".$_GET['first_name'];
    setcookie('first_name',$_GET['first_name']);
}else if(isset($_COOKIE['first_name'])){
    echo "Hello, ".$_COOKIE['first_name'];
}

else{
    echo 'What is your name: <form><input type ="text" name="first_name"/>?</form>';
}