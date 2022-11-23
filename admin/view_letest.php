<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
$s_id = $_SESSION['user_id'];
$conn = mysqli_connect('localhost','root','root','yom');
$sel_que = "SELECT letest.*, category.cat_name FROM category INNER  JOIN  letest ON letest.cat_id = category.id WHERE letest.user_id = $s_id";
$data  = mysqli_query($conn,$sel_que);

include ('header.php');
?>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">User Silder Detail's</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Id</th>
                                <th>Tital</th>
                                <th>Decripation</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($data)) { ?>
                                <tr>
                                    <td><?php echo $row['letest_id'];  ?></td>
                                    <td><?php echo $row['tital'];  ?></td>
                                    <td><?php echo $row['decripation'];  ?></td>
                                    <td><?php echo $row['cat_name'];  ?></td>
                                    <td>
                                        <img src="letest_img/<?php echo $row['image'];  ?>" height="200px">
                                    </td>
                                    <td>
                                        <a href="add_letest.php?up_id=<?php echo $row['letest_id'];?>" >Update</a>
                                    </td>
                                    <td>
                                        <a href="view_letest.php?d_id=<?php echo @$row['letest_id'];   ?>">Delete</a>
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

<?php include 'footer.php';   ?>

