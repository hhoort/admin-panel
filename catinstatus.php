<?php
include('includes/statustopbar.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Inactive status Page</h1>
      </div>
      <!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Inactive</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->


<?php
include('includes/header.php');

include('includes/sidebar.php');
include('includes/config.php');
include('addcat.php');

$fetching_data ="SELECT * from `category` where cstatus = '0'";
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
                    <th>Status</th>
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
                    <td><?php echo 'Inactive' ?></td>
                    
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
