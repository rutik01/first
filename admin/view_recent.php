<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$conn =  mysqli_connect('localhost','root','root','yom');

session_start();
include ('header.php');

$user_id =  $_SESSION['user_id'];

$sel_query = "SELECT * FROM recent WHERE user_id = $user_id";

if($data = mysqli_query($conn,$sel_query))
{
    $count = mysqli_num_rows($data);
    $row = mysqli_fetch_assoc($data);
}
else{
    echo "Sorry Error....///";
}

if (isset($_GET['d_id']))
{
    $delete_id = $_GET['d_id'];
    $select = "DELETE FROM recent where r_id = $delete_id";
    mysqli_query($conn,$select);
}
 ?>
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">User Recent Detail's </h3>

                        </h3>
                    </div>

<!--                    --><?php // echo $delete_id; ?>
                    <!-- /.card-header -->
                     <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Id</th>
                                <th>Tital</th>
                                <th>Decripation</th>
                                <th>Image</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($data)) { ?>
                                <tr>
                                    <td><?php echo $row['r_id'];  ?></td>
                                    <td><?php echo $row['tital'];  ?></td>
                                    <td><?php  echo $row['decripation'];  ?></td>
                                    <td>
                                        <img src="recent_img/<?php echo $row['image'];  ?>" height="200px">
                                    </td>
                                    <td>
                                        <a href="add_recent.php?up_id=<?php echo $row['r_id'];   ?>">Update</a>
                                    </td>
                                    <td>
                                        <a href="view_recent.php?d_id=<?php echo $row['r_id'];  ?>">Delete</a>
                                    </td>
                                </tr>
                            <?php  } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.card -->

<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>



<?php include ('footer.php'); ?>
