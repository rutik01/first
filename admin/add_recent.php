<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include('header.php');
$conn = mysqli_connect('localhost','root','root','yom');
$user_id = $_SESSION['user_id'];


if (isset($_GET['up_id']))
{
    $update_id = $_GET['up_id'];
    $sel_que = "SELECT * FROM recent where r_id = $update_id"; 
    $data = mysqli_query($conn,$sel_que);
    $row =  mysqli_fetch_assoc($data);

}
if (isset($_POST['save']))
{
    $tital = $_POST['tital'];
    $Descripation = $_POST['Descripation'];
    $image_name = $_FILES['image']['name'];
    $path =  'recent_img/'.$image_name;
    if (isset($_GET['up_id']))
    {
        $img_data = $row['image'];
        if ($image_name=='')
        {
            $img_up_data = $img_data;
        }
        else
        {
            $img_up_data = $image_name;
            move_uploaded_file($_FILES['image']['tmp_name'],$path);
            unlink("recent_img/".$img_data);
        }
        $up_que = "UPDATE recent SET tital = '$tital',decripation = '$Descripation',image = '$img_up_data' Where r_id = $update_id";
        mysqli_query($conn,$up_que);


    }
    elseif ($tital == '' && $Descripation == '' &&  $image_name == '')
    {
        echo "<script> alert('Plz, Enter Your Information...')</script>";
    }
    else{
        $insert_que = "INSERT INTO recent(user_id,	tital,decripation,	image) values ($user_id,'$tital','$Descripation','$image_name')";
        if(mysqli_query($conn,$insert_que))
        {
            move_uploaded_file($_FILES['image']['tmp_name'],$path);
        }
        else
        {
            echo "Sorry Some Error.....";
        }
    }

}

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Add Recent Form</h1>
                </div>
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Recent Form</li>
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
                                    <input type="Text" class="form-control" name="Descripation" placeholder="Enter Descripation" value="<?php echo @$row['decripation'];  ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" value="<?php echo @$row['image']   ?>">
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