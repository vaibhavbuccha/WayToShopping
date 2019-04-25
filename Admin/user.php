
<?php


include "session.php";
include "action.php";



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery2.js"></script>
    <title>Document</title>
    <style>
    </style>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Way To Shopping</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#" >User</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link btn btn-info logout" href="#" >Dashboard</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link btn btn-danger logout" href="#" >logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        <div class="container">
            <div class="jumbotron text-center text-light">
                <p class="tag"><q>User Information</q></p>
                <div>
                    <table class="table table-hover text-light">
                        <thead>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>&nbsp;</th>
                        </thead>
                        <?php
                           $data = $obj->fetch_records("user_info");
                            foreach($data as $row)
                            {
                        ?>
                        <tr>
                            <tbody>
                                <td><?php echo $row["user_id"]; ?></td>
                                <td><?php echo $row["first_name"]; ?></td>
                                <td><?php echo $row["last_name"]; ?></td>
                                <td><?php echo $row["email"]; ?></td>
                                <td><?php echo $row["mobile"]; ?></td>
                                <td><?php echo $row["address1"]; ?></td>
                                <td><button class="btn btn-outline-light">Delete</button></td>
                            </tbody>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>