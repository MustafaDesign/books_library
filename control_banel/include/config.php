<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "booklibrary";

$con = mysqli_connect($host , $user , $password , $db);


if(!$con){
    die("the reion : " .mysqli_connect_error());
}
?>