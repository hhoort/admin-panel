<?php
include('includes/config.php');

$id = $_GET['id'];

$restore = "UPDATE  `users` SET status = '1' where id = '$id' ";
$result = mysqli_query($conn, $restore);
if($result){
    header('location:/trash.php');
}else{
    echo "query failed";
}
?>
