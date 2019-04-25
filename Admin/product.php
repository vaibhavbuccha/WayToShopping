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
                            <a class="nav-link" href="#" >Products</a>
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
        <div  class="jumbotron text-center text-light">
                <p class="tag"><q>Stock</q></p>
                <table width="800px" class="table table-hover text-light">
                <?php
                           
                           $data = $obj->fetch_product("products");
                           foreach($data as $row)
                           {
                              // print_r($row);
                           
                           ?>
                       <tr>
                          
                           <td><?php echo $row["product_id"];  ?></td>
                           <td >
                             <img src="../product_images/<?php echo $row["product_image"];  ?>" width="200px" height="300px">
                            </td>
                            <td>
                                <table align="center">
                                    <tr>
                                        <th><?php echo $row["product_title"];  ?></th>
                                    </tr>
                                    <tr>
                                        <td><?php echo $row["product_desc"];  ?></td>
                                    </tr>
                                    <tr>
                                    <?php 
                                            $id =  $row["product_cat"];
                                        
                                            $cat = $obj->fetch_category("categories",$id);

                                            foreach($cat as $row2)
                                            {
                                               
                                        ?>
                                        <td>
                                            <?php echo $row2['cat_title'];?>
                                        </td>
                                        <?php
                                            }
                                        ?>
                                    </tr>
                                    <tr>
                                            <td>
                                            <?php echo $row["product_price"];  ?>
                                            </td>
                                    </tr>
                                </table>
                           </td>
                           <td>
                               <button class="btn btn-light">Delete</button>
                           </td>
                           
                       </tr>
                       <?php
                           
                        }
                        ?>
                </table>
        </div>
    </div>
</body>
</html>