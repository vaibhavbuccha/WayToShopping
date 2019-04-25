<?php

class database {
    public $con;
    public function __construct()
    {
        $this->con = mysqli_connect("localhost","root","","khanstore");
    }
}




?>