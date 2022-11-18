<?php 



    $conn = mysqli_connect('localhost','root','root','yom');


    if (isset($_POST['submit'])) {
        $email = $_POST['Email'];
        $password = $_POST['Password'];
        $city = $_POST['City'];
        $document = $_POST['Document'];


        $insert_que =  "INSERT INTO Register_form (Email,Password,City,Document) values ('$email','$password','$city','$document')";

        if(mysqli_query($conn,$insert_que))
        {
            header('location:index.php');
        }
        else{   
            echo "Sorry Some Error";
        }

    }   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <section style="box-shadow: 0 0 10px black;">
        <form method="POST" enctype="multipart/form-data">
            <div class="container bg-white border border-white-1" >
                <hr>
                <div class="row card-header bg-dark text-white">
                    <div class="col-12 text-center mt-4">
                        <h3>!! 🆁🅴🅶🅸🆂🆃🅴🆁-🅵🅾🆁🅼 !!</h3>
                    </div>
                </div>
                <hr>
                <div class="row-12">
                    <div class="col-12">
                        <div class="row mt-3">
                            <div class="col-2">
                                <h5 class="p-2">*Email:</h5>
                            </div>
                            <div class="col-auto">
                                <input type="email" name="Email" id="" class="p-2 rounded-3" require value="<?php echo @$fetch_data['Email'];   ?>">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-2">
                                <h5 class="p-2">*Password:</h5>
                            </div>
                            <div class="col-auto">
                                <input type="password" name="Password" class="p-2 rounded-3" require value="<?php echo @$fetch_data['Password'];   ?>">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2">
                                <h5 class="p-2">*City:</h5>
                            </div>
                            <div class="col-auto">
                                <select class="p-2 rounded-2 text-bold" name="City" require value="<?php echo @$fetch_data['City'];   ?>">
                                    <option class="font-weight-bold">Surat</option>
                                    <option class="font-weight-bold">Ahemdabad</option>
                                    <option class="font-weight-bold">Baroda</option>
                                    <option class="font-weight-bold">Bharuch</option>
                                    <option class="font-weight-bold">Vapi</option>
                                    <option class="font-weight-bold">Valsad</option>
                                    <option class="font-weight-bold">Navsari</option>
                                    <option class="font-weight-bold">Aanad</option>
                                    <option class="font-weight-bold">Gandhinagar</option>
                                    <option class="font-weight-bold">Banglore</option>
                                    <option class="font-weight-bold">Rajkot</option>
                                    <option class="font-weight-bold">Jamnagsr</option>
                                    <option class="font-weight-bold">Porbander</option>
                                    <option class="font-weight-bold">Bhavnagar</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2">
                                <h5 class="p-2">*Document:</h5>
                            </div>
                            <div class="col-auto">
                                <select class="p-2 rounded-3" name="Document" require value="<?php echo @$fetch_data['Document'];   ?>">
                                    <option>Water Bill</option>
                                    <option>Telephone (mobile bill)</option>
                                    <option>Electricity bill</option>
                                    <option>Income Tax Assessment Order</option>
                                    <option>Election ID card</option>
                                    <option>Proof of Gas Connection</option>
                                    <option>Certificate from Employe</option>
                                    <option>Spouse's passport copy </option>
                                    <option>Parent's passport copy</option>
                                    <option>Aadhaar Card</option>
                                    <option>Rent Agreement</option>
                                    <option>Photo Passbook</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-2 card-footer bg-dark text-white">
                    <div class="col-auto">
                        <div class="col-2">
                            <input type="submit" value="submit" class="btn btn-primary m-3" name="submit">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="col-2">
                            <a href="index.php" class="m-3 btn btn-warning">Exit</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>