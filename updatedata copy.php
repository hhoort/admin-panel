<?php
require('connection.php');



$pid = $_POST['pid'];
$pname = $_POST['pname'];
$pcat = $_POST['pcat'];
$pdes = $_POST['pdes'];
$pimg = $_FILES['pimg'];


$updatequery = "UPDATE `products` set pid = '$pid',  pname = '$pname', pcat = '$pcat',  pdesc = '$pdes', pimg = '$pimg' where pid = '$pid'";

$result = mysqli_query($connect, $updatequery);
if(!$result){
    die("query failed");
}

header('location:http://localhost/proaddnew/products/proaddition.php');


?>