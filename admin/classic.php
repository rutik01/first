<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
$r_id = $_SESSION['user_id'];

include ('header.php');

$conn = mysqli_connect('localhost','root','root','yom');
if (isset($_POST['save']))
{
    $tital = $_POST['tital'];
    $date = $_POST['date'];
    $des = $_POST['descripation'];
    $image_name =$_FILES['image']['name'];
    $path = "classic_img/".$image_name;

    if ($tital=='' && $date=='' && $des=='' && $image_name=='')
    {
            echo "<script> alert('Plz, Enter Your Infomation')</script>";
    }
    else
    {
        $insert_que = "INSERT INTO classic (r_id,tital,date,descripation,image) VALUES ($r_id,'$tital','$date','$des','$image_name')";

        if(mysqli_query($conn,$insert_que))
        {
            move_uploaded_file($_FILES['image']['tmp_name'],$path);
        }
    }
}

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Add Blog Image Form</h1>
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
                                    <input type="text" class="form-control" name="tital" placeholder="Enter Tital" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Date</label>
                                    <input type="date" class="form-control" name="date" placeholder="Enter Date" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Descripation</label>
                                    <input type="Text" class="form-control" name="descripation" placeholder="Enter Descripation" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" >
                                            <label class="custom-file-label" for="exampleInputFile" >Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
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

