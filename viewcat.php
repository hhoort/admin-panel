<?php
include('includes/cattopbar.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Category page</h1>
      </div>
      <!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">category</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

    <!-- Main content -->
    <div class="card-header">
            <h3 class="card-title">Category Table</h3>
            <a href="addcat.php" class="btn btn-primary float-right btn-sm" data-bs-toggle="modal" data-bs-target="#AddUserModal"> Add Category</a>
          </div>

<?php
include('includes/header.php');

include('includes/sidebar.php');
include('includes/config.php');
include('addcat.php');






$fetching_data ="SELECT * from `category` where cstatus = '1'";
$res = mysqli_query($connection,$fetching_data);
if($res){
    if(mysqli_num_rows($res) > 0){

?>




          <div class="card">
             

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Update</th>
                    <th>Trash</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    while($row = mysqli_fetch_assoc($res)){
                  ?>
                  <tr>
                    <td scope="row"><?php echo $row['cid'] ?></td>
                    <td><?php echo $row['cname'] ?></td>
                    <td><?php echo $row['ctype'] ?></td>
                    <td><?php echo $row['cdescription'] ?></td>
                    <td><a href="catupdate.php?id=<?php echo $row['cid'];  ?>" class="btn btn-warning">Update</a></td>
                    <td><a href="catdelete.php?id=<?php echo $row['cid'];  ?>" class="btn btn-success">Trash</a></td>
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
          
 <?php
include('includes/footer.php');
?>