<?php
include('includes/config.php');

$id = $_POST['id'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];




$updatequery = "UPDATE `users` set id = '$id',  firstname = '$fname',lastname='lname', email = '$email' where id = '$id'";

$result = mysqli_query($conn, $updatequery);
if(!$result){
    echo("query failed");
}

header('location:/register.php');


?>