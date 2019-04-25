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
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery2.js"></script>
    <title>Document</title>
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
                            <a class="nav-link" href="#" >Order's</a>
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
                <div class="jumbotron text-center">
                    <p class="tag"><q>order's</q></p>
                    <table class="table table-hover text-light">
                        <thead>
                            <th>#</th>
                            <th>Customer Name</th>
                            <th>product</th>
                            <th>Transection Id</th>
                            <th>Amount</th>
                            <th>Payment Status</th>
                            <th>&nbsp;</th>
                        </thead>
                        <?php 
                        
                        $data = $obj->fetch_order("orders");
                        foreach($data as $row)
                        {
                        
                        ?>
                        <tbody>
                            <td><?php echo $row["order_id"]; ?></td>
                            <td>
                            <?php 
                            $id = $row["user_id"]; 
                            $username = $obj->fetch_user("user_info",$id);
                            foreach($username as $user)
                            {
                                echo $user["first_name"]." ".$user["last_name"] ;
                            }
                            ?>
                            </td>
                            <td>
                                <?php 
                                   $product = $row["product_id"];
                                   $prod = $obj->fetch_product2("products",$product);
                                   foreach($prod as $produ)
                                   {
                                       echo $produ['product_title'];
                                   }
                                 ?>
                            </td>
                            <td><?php echo $row["trx_id"]; ?></td>
                            <td> <?php 
                                   $product = $row["product_id"];
                                   $prod = $obj->fetch_product2("products",$product);
                                   foreach($prod as $produ)
                                   {
                                       echo $produ['product_price']."/-";
                                   }
                                 ?></td>
                            <td><?php echo $row["p_status"]; ?></td>
                            <td><button class="btn btn-primary" >Deliver</button></td>
                        </tbody>
                        <?php
                        
                        }
                        ?>
                    </table>
                </div>
            </div>
    </body>
</html>