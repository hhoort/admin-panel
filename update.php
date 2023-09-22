<?php
include('includes/config.php');


$user_id = $_GET['id'];
$query = "SELECT * from `users` where id = '$user_id'";
$result = mysqli_query($conn, $query);
if(!$result){   
    echo("query failed");
}
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title> Update info using Php </title>
</head>
<body>
<div class="container">
<h1> Update Your Information</h1>
<form action="updatedata.php" method="post" class="form-group">
    <label for="name"> Name  </label>
    <input type="hidden" name="id" class="form-control" value="<?php echo $row['id'] ?>">
    <input type="text" name="name" class="form-control" value="<?php echo $row['firstname'] ?>">
    <label for="text">  </label>
    <input type="text" name="name" class="form-control" value="<?php echo $row['lastname'] ?>">
    <label for="email"> Email  </label>
    <input type="text" name="email" class="form-control" value="<?php echo $row['email'] ?>">
    <label for="phone"> Phone  </label>
    <input type="text" name="phone" class="form-control" value="<?php echo $row['phone'] ?>">
    <input type="submit" name="submit" value="Update" class="btn btn-primary">
</form>
</div>

<?php
}
}
?>

</body>