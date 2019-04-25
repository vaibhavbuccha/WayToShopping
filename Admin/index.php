<?php

session_start();



error_reporting(1);

$con = mysqli_connect("localhost","root","","majorproject");
   if(isset($_POST['login']))
    {
        $username = mysqli_real_escape_string($con,$_POST['username']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
        $password_1 = md5($password);
        $errors= array();
        if(empty($username))
        {
           array_push($errors,'<p style="color: red; border: 1px solid red">username is required</p>');
           echo '<p style="color: red; border: 1px solid red">username is required</p>';
        }
        if(empty($password))
        {
           array_push($errors,'<p style="color: red; border: 1px solid red">password is required</p>');
           echo '<p style="color: red; border: 1px solid red">password is required</p>';
        }

        if(count($errors)==0)
        {
            $sql = "SELECT * FROM admin WHERE username ='".$username."'AND password='".$password_1."' LIMIT 1";
            $result = mysqli_query($con,$sql);
            if(mysqli_num_rows($result)==1)
            {   
                $_SESSION['admin'] = $username;
                echo '<p style="color: green; border: 1px solid green">welcome!</p>';
                header('Location: dashboard.php');
            }
            else
            {
                echo '<p style="color: red; border: 1px solid red">wrong username password try again</p>';
            }
        }
       
    }
   
/*
$con = mysqli_connect("localhost","root","","way2shopping");

if(isset($_POST['login']))
{
    $username = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $password_1 = md5($password);
    $sql = "SELECT * FROM user WHERE username ='".$username."'AND password='".$password_1."' LIMIT 1";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==1)
    {
        echo "welcome";
        exit();
    }
    else
    {
        echo " there is some issue";
    }
}
*/





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery2.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron text-center">
            <h3><q><i>Way To Shopping</i></q></h3>
            <p><q><i>Admin panel</i></q></p>
        </div>
        <div align="center"  class="">
            <div align="center" class="login-box">
                <p id="head">Login Here!</p>
                <table align="center" width="100%" class="">
                    <form action="#" method="post">
                        <thead>
                            <th >
                                <span class="fa fa-user"></span>
                            </th>
                        
                            <td>
                                <input type="text" class="form-group" name="username">
                            </td>
                        </thead>
                        <thead>
                            <th >
                                <span class="fa fa-lock"></span>
                            </th>
                        
                            <td>
                                <input type="password" class="form-group" name="password">
                            </td>
                        </thead>
                    </table>
                            <button name="login" type="submit" class="btn btn-outline-primary">Login</button>
                    </form>
                
            </div>
        </div>
    </div>
</body>

</html>