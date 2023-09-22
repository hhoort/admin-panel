<?php

include('connection.php');

  $userid = $_GET['id'];
// echo $userid;


$delete = "UPDATE `products` SET pstatus = '0'  where pid = '$pid'";

$result = mysqli_query($connect, $delete);
if(!$result){die("query failed");
}
header('location:http://localhost/proaddnew/products/fetchpro.php');

?>