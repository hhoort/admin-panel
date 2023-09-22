<?php
include('includes/config.php');

$id = $_GET['id'];

$restore = "UPDATE  `category` SET cstatus = '1' where cid = '$id' ";
$result = mysqli_query($conn, $restore);
if($result){
    header('location:/cattrash.php');
}else{
    echo "query failed";
}
?>