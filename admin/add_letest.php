<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
$conn = mysqli_connect('localhost','root','root','yom');

$user_id = $_SESSION['user_id'];
if (isset($_POST['save']))
{
    $tital = $_POST['tital'];
    $descripation = $_POST['descripation'];
    $image_name = $_FILES['image']['name'];
    $path = 'letest_img/'.$image_name;

    if ($tital ==  '' && $descripation == '' && $image_name == '')
    {
        echo "<script> alert('Plz,Enter Information')</script>";
    }
    else{
       $insert_que = "INSERT INTO letest (user_id,tital,decripation,image) values ($user_id,'$tital','$descripation','$image_name')";
            if (mysqli_query($conn,$insert_que))
            {
                move_uploaded_file($_FILES['image']['tmp_name'],$path);
            }
    }
}
include ('header.php');

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Add Letest Form</h1>
                </div>
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Letest Form</li>
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
                                    <input type="text" class="form-control" name="tital" placeholder="Enter Tital" value="">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Descripation</label>
                                    <input type="Text" class="form-control" name="descripation" placeholder="Enter Descripation" value="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" value="">
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
<?php include('footer.php'); ?>
