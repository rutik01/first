<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
$conn = mysqli_connect('localhost','root','root','yom');

if (isset($_SESSION['user_email']) &&  isset($_SESSION['user_password'])  && isset($_SESSION['user_email']) != '' && isset($_SESSION['user_password']) != '')
{
    header("Location:dashbord.php");
}
    if (isset($_POST['login']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sel_quer = "SELECT * FROM Register_form WHERE Email = '$email' AND Password = '$password'";
        $data = mysqli_query($conn,$sel_quer);
        $count = mysqli_num_rows($data);
        if ($count==1) 
        {
                $row = mysqli_fetch_assoc($data);
                $_SESSION['user_email'] = $row['Email'];
                $_SESSION['user_password'] = $row['Password'];
                $_SESSION['user_id'] = $row['Id'];
                echo $_SESSION['user_id'];
                header("Location:dashbord.php");
        }
      elseif ($email == '' && $password == '')
      {
            echo "<script>  alert('Plz Enter Your Information')</script>";
      }
      else
          {
            echo "<script>  alert('Plz Enter Valid Information')</script>";
      }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<section >
        <div class="container d-flex justify-content-center mt-3">
            <div class="row-6" style="box-shadow: 0 0 10px black ;">
                <div class="col-12  main rounded">
                    <div class="card card-header p-3 d-flex text-center">
                         <i class="bi bi-people-fill user_icon"></i>
                        <h4>Login Page</h4>
                    </div>
                    <div class=" card card-body">
                        <form action="" method="POST" class="p-3 pe-5">
                            <table>
                                <tr>
                                    <td class="p-3">Emaill:</td>
                                    <td class="ps-2">
                                        <input type="email" name="email" id="" class="p-2">
                                    </td>
                                </tr>
                                <tr class="mt-3">
                                    <td class="p-3">Password:</td>
                                    <td class="ps-2">
                                        <input type="password" name="password" id="" class="p-2">
                                    </td>
                                </tr>
                                <tr class="mt-3">
                                    <td class="ps-2" colspan="2">
                                        <i class="bi bi-box-arrow-in-right"></i>
                                        <input type="submit" value="Login" name="login" class="px-4 py-2 rounded bg-dark text-white mt-3">

                                        <i class="bi bi-person-plus-fill" style="margin-left: 10px"></i>
                                        <button class="btn btn-primary py-2 px-4">
                                            <a href="register.php" class="text-white" style="text-decoration: none">Register</a>
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>