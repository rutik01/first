<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
$s_id = $_SESSION['user_id'];
$conn = mysqli_connect('localhost','root','root','yom');
//session_start();
$sel_que = "SELECT * FROM  silder WHERE user_id = $s_id";
$data  = mysqli_query($conn,$sel_que);
include 'header.php';

if (isset($_GET['d_id']))
{
    $delete_id = $_GET['d_id'];
//    $select_que =  "SELECT * FROM silder where s_id = $delete_id";
//    $data = mysqli_query($conn,$select_que);
//    $row = mysqli_fetch_assoc($data);
//    $img_name = $row['image'];
    $del_que = "DELETE FROM silder where s_id = $delete_id";
    if (mysqli_query($conn,$del_que))
    {
        echo "Successfully Runn...";
    }
    else{
        echo "Sorry,Some Error Found";
    }
}
?>
<section class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">User Silder Detail's</h3>
<!--                  --><?php //  echo '<pre>';
//                  print_r($row);   ?>
              </div>
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
                                   <td><?php echo $row['s_id'];  ?></td>
                                   <td><?php echo $row['tital'];  ?></td>
                                   <td><?php echo $row['decripation'];  ?></td>
                                   <td>
                                       <img src="img/<?php echo $row['image'];  ?>" height="200px">
                                   </td>
                                   <td>
                                       <a href="Add_silder.php?up_id=<?php echo $row['s_id'];?>" >Update</a>
                                   </td>
                                   <td>
                                       <a href="view_silder.php?d_id=<?php echo @$row['s_id'];   ?>">Delete</a>
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

