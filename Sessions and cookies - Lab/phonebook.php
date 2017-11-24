<?php
session_start();

include "form_view.php";

if(isset($_GET['name'])&&isset($_GET['number'])&&isset($_GET['submit'])){

    $_SESSION[$_GET['name']]=$_GET['number'];

}
if(!empty($_SESSION)){

    include "table_view.php";


}
//session_destroy();
