
<?php

// include "connect.php";


// class login extends database{
    
//     public function login_admin($table,$user,$pass)
//     {
//         $sql = "SELECT * FROM ".$table." WHERE username='".$user."',password='".$pass."' LIMIT 1";
//         $query = mysqli_query($this->con,$sql);
//         if($query==1)
//         {
//             return true;
//             // header("location:dashboard.php");
//             echo "hello";
//         }
//     }

// }



// $obj = new login;


echo md5("admin");

?>