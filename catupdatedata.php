<?php
include('config.php');

$id = $_POST['cid'];
$name = $_POST['catname'];
$type = $_POST['cattype'];
$des = $_POST['catdes'];



$updatequery = "UPDATE `category` set cid = '$id',  cname = '$name', ctype = '$type', cdescription = '$des' where cid = '$id'";

$result = mysqli_query($conn, $updatequery);
if(!$result){
    echo("query failed");
}

header('location:/showcat.php');


?>