<?php
include "session.php";
include "action.php";


if(isset($_POST['upload']))
{
    $img = $_FILES['product_image']['name'];
    $img_loc = $_FILES['product_image']['tmp_name'];
    $img_des = "../product_images/".$img;
    move_uploaded_file($_FILES['product_image']['tmp_name'] , $img_des);
    $myArray = array(
        "product_cat" => $_POST['product_cat'],
        "product_brand" => $_POST['product_brand'],
        "product_title" => $_POST['product_title'],
        "product_price" => $_POST['product_price'],
        "product_desc" => $_POST['product_desc'],
        "product_image" => $img
    );
    // foreach($myArray as $arr)
    // {
    //     echo $arr."<br>";
    // }


    if($obj->insert_product("products",$myArray)){
        header("location:product.php"); //if insertion query gives true than it work.
    }
}

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
    <style>
    input{
        width: 250px; 
        text-align:center;
        color: white;
        background: cyan;   
    }
    textarea{
        width: 250px; 
        text-align:center;
        color: white;
        background: cyan; 
    }
    select{
        width: 250px; 
        text-align:center;
        color: white;
        background: cyan; 
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
                            <a class="nav-link" href="#" >Add product</a>
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
                    <p class="tag"><q>Add product</q></p>
                    <table class="table table-hover text-center">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <thead>
                                <tr>
                                    <th>Product Title</th>
                                    <td><input type="text" name="product_title" placeholder="product title" class="form-group btn btn-primary"></td>
                                </tr>
                                <tr>
                                    <th>Product description</th>
                                    <td><textarea class="form-group btn btn-primary" name="product_desc" placeholder="product discription"></textarea></td>
                                </tr>
                                <tr>
                                    <th>Product price</th>
                                    <td><input type="number" placeholder="product price" name="product_price" class="form-group btn btn-primary"></td>
                                </tr>
                                <tr>
                                    <th>Product category</th>
                                    <td>
                                       
                                        <select class="btn btn-primary" name="product_cat" id="">
                                        <?php
                                            
                                            $data = $obj->fetch_category_all("categories");
                                            foreach($data as $row)
                                            {
                                            ?>
                                            <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_title']; ?></option>
                                            <?php }  ?>
                                        </select>
                                        
                                    </td>
                                </tr>
                                <tr>
                                        <th>Product brand</th>
                                        <td>
                                            <select class="btn btn-primary" name="product_brand" id="">
                                            <?php
                                            
                                            $data2 = $obj->fetch_category_all("brands");
                                            foreach($data2 as $row2)
                                            {
                                            ?>
                                                <option value="<?php echo $row2['brand_id']; ?>"><?php echo $row2['brand_title']; ?></option>
                                                <?php }  ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                            <th>Product image</th>
                                            <td><input class="btn btn-primary" name="product_image" type="file"  class="form-group"></td>
                                        </tr>
                            <tr>
                               <td colspan="2"><button class="btn btn-primary form group" type="submit" name="upload">upload</button></td> 
                            </tr>
                            </thead>
                            
                            
                        </form>
                    </table>
                </div>
            </div>
    </body>
</html>