<?php

include "session.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery2.js"></script>
    <title>Document</title>
    <style>
        .box1>p{
            font-size: 30px;
        }
    .fa-plus,.fa-cart-arrow-down,.fa-cart-plus,.fa-users,.fa-blog{
        font-size: 70px;
        margin-top: 40px;
    }
    
    
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
                    <a class="nav-link" href="#" >Dashboard</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link btn btn-danger logout" href="#" >logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="main container" align="center">
        <a href="#">
            <div class="box1">
                <p class="tag">Content</p>
                <p><span class="fa fa-blog"></span></p>
            </div>
        </a>
        <a href="user.php">
            <div class="box1">
                <p class="tag">User</p>
                <p><span class="fa fa-users"></span></p>
            </div>
        </a>
        <a href="order.php">
            <div class="box1">
                <p class="tag">Order</p>
                <p><span class="fa fa-cart-plus"></span></p>
            </div>
        </a>
        <a href="#">
            <div class="box1">
                <p class="tag">Cart</p>
                <p><span class="fa fa-cart-arrow-down"></span></p>
            </div>
        </a>
        <a href="product.php">
            <div class="box1">
                <p class="tag">Product</p>
                <p><span class="fa fa-product-hunt"></span></p>
            </div>
        </a>
        <a href="#">
            <div class="box1">
                <p class="tag">Add Product</p>
                <p><span class="fa fa-plus"></span></p>
            </div>
        </a>
    </div>
</body>
</html>