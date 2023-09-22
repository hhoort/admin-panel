<?php
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');
include('config.php');



if(isset($_POST['submit'])){
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if($password == $cpassword){
    $hashPass = password_hash($password, PASSWORD_BCRYPT);

        $check_email = "SELECT * from `user` where email = '$email' ";
        $run_email = mysqli_query($conn, $check_email);
        if(mysqli_num_rows($run_email) > 0){
            echo "Email already exist";
        }else{
            $insert = "INSERT INTO `user` ( `firstname`, `lastname`, `email`, `password`, `cpassword`) VALUES ( '$fname', '$lname', '$email', '$password', '$cpassword')";
        $connect_insert = mysqli_query($conn, $insert);
        if($connect_insert){
            echo "registration successful";
        }else{
            echo "registration failed";
        }
        
        }
    }else{
        echo "Password not matched";
    }

}

?>


    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>Add users</h2>
                <hr>
        <form class="user" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                        placeholder="First Name" name="firstname" required>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName"
                        placeholder="Last Name" name="lastname" required>
                 </div>
            </div>
            <div class="form-group">
                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="Email Address" name="email" required>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="Password" name="password" required>
                </div>
                <div class="col-sm-6">
                    <input type="cpassword" class="form-control form-control-user"
                        id="exampleRepeatPassword" placeholder=" cpassword" name="cpassword" required>
                </div>
            </div>
            <!-- <a class="btn btn-primary btn-user btn-block" name="register">
                Register Account
            </a> -->
            <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" >
            <hr>
            <a href="login.php" class="btn btn-google btn-user btn-block">
               </i>Already have an Acount?Login Here
            </a>
                                
        </form>

            </div>

        </div>

    </div>


</body>

</html>










<?php
include('admin/includes/footer.php');


?>