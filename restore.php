<?php
require('connection.php');

$pid = $_GET['id'];

$restore = "UPDATE * from `products` where pid = '$pid' ";
$sqlconn = mysqli_query($connect, $restore);
if($sqlconn){
    
    header('location:http://localhost/proaddnew/products/fetchpro.php');
}else{
    echo "query failed";
}
?>
