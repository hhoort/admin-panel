 <?php
 include('includes/cattopbar.php');
 ?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
        <!-- Main content -->
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Trash Table</h3>
              </div>
<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/config.php');

$fetching_data ="SELECT * from `category` where cstatus = '0'";
$result = mysqli_query($connection,$fetching_data);
if($result){
    if(mysqli_num_rows($result) > 0){


?>


              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Restore</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    while($row = mysqli_fetch_assoc($result)){
                  ?>
                  <tr>
                    <td scope="row"><?php echo $row['cid'] ?></td>
                    <td><?php echo $row['cname'] ?></td>
                    <td><?php echo $row['ctype'] ?></td>
                    <td><?php echo $row['cdescription'] ?></td>
                    <td><a href="catrestore.php?id=<?php echo $row['cid'];  ?>" class="btn btn-primary">Restore</a></td>
                    <td><a href="catperdel.php?id=<?php echo $row['cid'];  ?>" class="btn btn-danger">Delete</a></td>
                  </tr>
                  <?php
                  }
                  ?>
                  </tbody>
                </table>

                <?php
                  }
                  }
                ?>
              </div>
        </div>
 </div>

</div>
<?php
include('includes/footer.php');
?>