<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$conn = mysqli_connect('localhost','root','root','yom');
session_start();
$user_id = $_SESSION['user_id'];

$sel_que = "SELECT * FROM other WHERE r_id = $user_id";
$data = mysqli_query($conn,$sel_que);

if (isset($_GET['d_id']))
{
    $delete_id = $_GET['d_id'];
    $del_que = "DELETE FROM other where o_id = $delete_id";
    if (mysqli_query($conn,$del_que))
    {
        header('location:Add_other.php');
    }
}
include('header.php');  ?>
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">User Silder Detail's </h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Id</th>
                                <th>Tital</th>
                                <th>Decripation</th>
                                <th>City</th>
                                <th>Country</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                            <tr>
                                    <td><?php  echo $row['o_id'];?></td>
                                <td><?php  echo $row['tital'];  ?></td>
                                <td><?php  echo $row['descripation'];  ?></td>
                                <td><?php  echo $row['city'];  ?></td>
                                <td><?php  echo $row['country'];  ?></td>
                                <td>
                                    <a href="Add_other.php?up_id=<?php echo $row['o_id'];?>">Update</a>
                                </td>
                                <td>
                                    <a href="View_other.php?d_id=<?php echo $row['o_id'];  ?>">Delete</a>
                                </td>

                            </tr>
                            <?php   } ?>
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