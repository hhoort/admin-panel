<?php

require('connection.php');

$pid = $_GET['id'];

$del = "DELETE from `products` where pid = '$pid' ";

$res = mysqli_query($connect, $del);
if(!$res){
    echo "query failed";
}else{
    header('location:http://localhost/proaddnew/products/trash.php');
}

?>