<?php

$localhost ="localhost";
$username ="root";
$password ="";
$dbname ="dbuwin";


$con = new mysqli($localhost, $username, $password,$dbname);

if($con->connect_error){
    die("connection falied : " . $con->connect_error);}
?>