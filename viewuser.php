<?php
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');

?>


    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>Registerd users</h2>
                <hr>
            <table class="table table-warning">
                <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">email</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($data)) {

                    ?>
                    <tr>
                        <td>
                            <?php echo $row['id'] ?>
                        </td>
                        <td>
                            <?php echo $row['firstname'] ?>
                        </td>
                        <td>
                            <?php echo $row['lastname'] ?>
                        </td>
                        <td>
                            <?php echo $row['email'] ?>
                </td>


                        <td>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><?php echo 'Delete' ?></a>
                            <a href="restore.php?id=<?php echo $row['id']; ?>" class="btn btn-success"><?php echo 'Restore' ?></a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
            </table>
            <!-- <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
            </nav> -->

            </div>

        </div>

    </div>


</body>

</html>










<?php
include('admin/includes/footer.php');


?>