<html>
    <head>
		<meta charset="UTF-8">
		<title>Way 2 shopping</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<style>
       
            
        body{
            padding: 0px;
            margin: 0px;
            width:100%;
            height: 100%;
        }
        .top{
            width: 100%;
            height: 650px;
            /* background: linear-gradient(90deg, rgba(39,9,121,1) 0%, rgba(4,238,165,0.7763480392156863) 0%, rgba(0,212,255,1) 100%); */
            background: linear-gradient(90deg, rgb(1, 41, 78) 0%, rgba(4, 191, 238, 0.776) 0%, rgb(30, 255, 0,0.7) 100%); 
        }
        .middle{
            width: 0px;
            height: -10px;
            position: relative;
            top: -550px;
            left: 149px;
            border: 600px solid white;
            border-bottom: 5px;
            /* border: 600px solid rgba(7, 95, 226, 0.308); */
            border-left-color: transparent;
            border-top-color: transparent;
        }
.illustration{
    margin: 50px;
}

.outer{
  width: 600px;
  height: 400px;
  border: 1px solid white;
  border-radius: 20px;
  background: white;
}
.inner{
  position: relative;
  top: 30px;
    width: 540px;
  height: 340px;
  border: 1px solid white;
  border-radius: 20px;
}
.notification{
  width: 100%;
  background:rgb(27, 1, 87);
  height: 35px;
  border-top-left-radius: 20px;
  border-top-right-radius: 20px;
}
.dot1{
  width: 4px;
  height: 4px;
  background: rgb(5, 248, 17);
  border: 5px solid rgb(5, 248, 17);
  border-radius: 50%;
  margin:-5px auto 0;
  position: relative;
  left: -250px;
}
.dot2{
  width: 4px;
  height: 4px;
  background: rgb(248, 5, 37);
  border: 5px solid rgb(248, 5, 37);
  border-radius: 50%;
  margin:-6px auto 0;
  position: relative;
  left: -235px;
  top: -4px;
}
.dot3{
  width: 4px;
  height: 4px;
  background: rgb(209, 245, 3);
  border: 5px solid rgb(209, 245, 3) ;
  border-radius: 50%;
  margin:-12px auto 0;
  position: relative;
  left: -220px;
  top: -2px;
}
.mainbox{
  width: 100%;
  background: rgba(4,238,165,0.3561799719887955);
  height: 90%;
  border-bottom-left-radius: 20px;
  border-bottom-right-radius: 20px;
}
.div1{
      font-size: 30px;
  background: -webkit-linear-gradient(0deg, #a3e902, #ff0055);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.img{
  position: relative;
  top: -50px;
  left: 50px;
}
.middle_box{
    width: 1300px;
    /* height: 100%; */
    position: relative;
    right: 700px;
    background: rgba(7, 89, 243, 0.466);
    z-index: 1px;
    padding: 50px;
    background-size: cover;
    /* backface-visibility: hidden; */
}
.product{
   
}
.contact{
    width: 1400px;
    height: 500px;
    top: -1100px;
    position: relative;
    background: black;
    display: none;
}
        </style>
    </head>
    <body>
        <div class="top">
            <div class="wait overlay">
                <div class="loader"></div>
            </div>
                <div class="navbar navbar-light navbar-fixed-top">
                    <div class="container-fluid">	
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
                                <span class="sr-only">navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="#" class="navbar-brand">Way 2 shopping</a>
                        </div>
                        <div class="collapse navbar-collapse" id="collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                                <li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
                            </ul>
                            <form class="navbar-form navbar-left">
                                <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Search" id="search">
                                </div>
                                <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
                             </form>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
                                    <div class="dropdown-menu" style="border-radius: 20px;width:400px;">
                                        <div style="border-radius: 20px;" class="panel panel-success">
                                            <div style="border-radius: 20px;" class="panel-heading">
                                                <div class="row">
                                                    <div class="col-md-3">Sl.No</div>
                                                    <div class="col-md-3">Product Image</div>
                                                    <div class="col-md-3">Product Name</div>
                                                    <div class="col-md-3">Price in $.</div>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div id="cart_product">
                                                <!--<div class="row">
                                                    <div class="col-md-3">Sl.No</div>
                                                    <div class="col-md-3">Product Image</div>
                                                    <div class="col-md-3">Product Name</div>
                                                    <div class="col-md-3">Price in $.</div>
                                                </div>-->
                                                </div>
                                            </div>
                                            <div class="panel-footer"></div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignIn</a>
                                    <ul  class="dropdown-menu">
                                        <div  style="width:300px;border-radius: 30px; ">
                                            <div style="border-radius: 30px;" class="panel panel-primary">
                                                <div style="border-top-left-radius: 20px;border-top-right-radius: 20px;" class="panel-heading">Login</div>
                                                <div  style="border-bottom-left-radius: 20px;border-bottom-right-radius: 20px;" class="panel-heading">
                                                    <form onsubmit="return false" id="login">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control" name="email" id="email" required/>
                                                        <label for="email">Password</label>
                                                        <input type="password" class="form-control" name="password" id="password" required/>
                                                        <p><br/></p>
                                                        <a href="#" style="color:white; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right;">
                                                    </form>
                                                </div>
                                                <div class="panel-footer" id="e_msg"></div>
                                            </div>
                                        </div>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>	
                    <p><br/></p>
                    <p><br/></p>
                    <p><br/></p>

<div align="center" class="illustration">

    <div align="center" class="outer">
        <div class="inner">
          <div class="notification">
            <br>
            <div class="dot1"></div>
            <div class="dot2"></div>
            <div class="dot3"></div>
          </div>
          <div class="mainbox">
            <table>
              <tr>
                <td>
                  <div class="div1">
                    <h1>Way To Shopping</h1>
                    <br>
                    <div class="img">
                    <img src="https://img.icons8.com/bubbles/2x/man-red-shopping-basket.png">
                      <div>
                  </div>
                 </td>
              </tr>
            </table>
           </div>
              
        </div>
      </div>

</div>
<p><br/></p>
<p><br/></p>
<p><br/></p>
                    <!-- <p>this is product</p> -->
               
        
        <div class="middle">
            <div class="middle_box">
            <div >
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-2 col-xs-12">
                            <div id="get_category">
                            </div>
                            <!--<div class="nav nav-pills nav-stacked">
                                <li class="active"><a href="#"><h4>Categories</h4></a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Categories</a></li>
                            </div> -->
                            <div id="get_brand">
                            </div>
                            <!--<div class="nav nav-pills nav-stacked">
                                <li class="active"><a href="#"><h4>Brand</h4></a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Categories</a></li>
                            </div> -->
                        </div>
                        <div class="col-md-8 col-xs-12">
                            <div class="row">
                                <div class="col-md-12 col-xs-12" id="product_msg">
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">Products</div>
                                <div class="panel-body">
                                    <div id="get_product">
                                        <!--Here we get product jquery Ajax Request-->
                                    </div>
                                    <!--<div class="col-md-4">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">Samsung Galaxy</div>
                                            <div class="panel-body">
                                                <img src="product_images/images.JPG"/>
                                            </div>
                                            <div class="panel-heading">$.500.00
                                                <button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="panel-footer">Way to shopping&copy; 2019</div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
        </div>
    </div>
</div>
<div class="contact">
    
</div>
</div>
    </body>
</html>