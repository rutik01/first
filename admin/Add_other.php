<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$conn = mysqli_connect('localhost','root','root','yom');
session_start();

$user_id = $_SESSION['user_id'];


if (isset($_GET['up_id']))
{
    $update_id = $_GET['up_id'];
    $sel_que = "SELECT * FROM other Where o_id = $update_id";
    $data = mysqli_query($conn,$sel_que);
    $row = mysqli_fetch_assoc($data);
}

if (isset($_POST['save']))
{
    $tital = $_POST['tital'];
    $descripation = $_POST['descripation'];
    $city = $_POST['city'];
    $country = $_POST['country'];

    if (isset($_GET['up_id']))
    {
        $up_que = "UPDATE other SET tital = '$tital',descripation = '$descripation' ,city = '$city',country = '$country' WHERE o_id = $update_id";
        if (mysqli_query($conn,$up_que))
        {
            header("Location:View_other.php");
        }
    }
    else{
        $insert_que =  "INSERT INTO other (tital,	descripation,	city, country,r_id) values ('$tital','$descripation','$city','$country',$user_id)";
        if(mysqli_query($conn,$insert_que))
        {
            echo "<script> alert('Successfully Insert..')</script>";
        }
        else{
            echo "<script> alert('Sorry Some Error Found')</script>";
        }
    }
}
include('header.php');   ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>General Form</h1>
                </div>
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Quick Example</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tital</label>
                                    <input type="text" class="form-control" name="tital" placeholder="Enter Tital" value="<?php echo @$row['tital'];  ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Descripation</label>
                                    <input type="Text" class="form-control" name="descripation" placeholder="Enter Descripation" value="<?php echo @$row['descripation'];  ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">City</label>
                                    <input type="Text" class="form-control" name="city" placeholder="Enter Your City" value="<?php echo @$row['city'];  ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Country</label>
                                    <input type="Text" class="form-control" name="country" placeholder="Enter Your Country" value="<?php echo @$row['country'];  ?>">
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" name="save">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /.card -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
    $(function () {
        bsCustomFileInput.init();
    });
</script>
<?php  include 'footer.php';   ?>