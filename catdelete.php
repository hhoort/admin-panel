<?php
include('includes/config.php');

$id = $_GET['id'];

$delete = "UPDATE `category` SET cstatus = '0'  where cid = '$id'";

$result = mysqli_query($conn, $delete);
if(!$result){
  echo("query failed");
}
header('location:/showcat.php');

?>