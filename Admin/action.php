<?php
include "connect.php";

class action extends database{

    public function fetch_records($table){
        //echo $this->con;
        $sql = "SELECT * FROM ".$table;
        $array = array();
        $result  = mysqli_query($this->con,$sql);
        
        while($row = mysqli_fetch_assoc($result))
        {
            $array[] = $row;
        }
        return $array;
    }

    public function fetch_product($table){
        $sql = "SELECT * FROM ".$table;
        $array = array();
        $result  = mysqli_query($this->con,$sql);
        
        while($row = mysqli_fetch_assoc($result))
        {
            $array[] = $row;
        }
        return $array;
    }

    public function fetch_product2($table,$id){
        $sql = "SELECT * FROM ".$table." WHERE product_id='".$id."'";
        $array = array();
        $result  = mysqli_query($this->con,$sql);
        
        while($row = mysqli_fetch_assoc($result))
        {
            $array[] = $row;
        }
        return $array;
    }

    public function fetch_category($table,$id)
    {
        $sql = "SELECT * FROM ".$table." WHERE cat_id='".$id."'";
        $array = array();
        $result  = mysqli_query($this->con,$sql);
        
        while($row = mysqli_fetch_assoc($result))
        {
            $array[] = $row;
        }
        return $array;
    }

    public function fetch_category_all($table)
    {
        $sql = "SELECT * FROM ".$table;
        $array = array();
        $result  = mysqli_query($this->con,$sql);
        
        while($row = mysqli_fetch_assoc($result))
        {
            $array[] = $row;
        }
        return $array;
    }

    public function fetch_brand($table,$id)
    {
        $sql = "SELECT * FROM ".$table." WHERE brand_id='".$id."'";
        $array = array();
        $result  = mysqli_query($this->con,$sql);
        
        while($row = mysqli_fetch_assoc($result))
        {
            $array[] = $row;
        }
        return $array;
    }

    public function fetch_order($table)
    {
        $sql = "SELECT * FROM ".$table;
        $array = array();
        $result  = mysqli_query($this->con,$sql);
        
        while($row = mysqli_fetch_assoc($result))
        {
            $array[] = $row;
        }
        return $array;
    }
    

    public function fetch_user($table,$id)
    {
        $sql = "SELECT * FROM ".$table." WHERE user_id='".$id."'";
        $array = array();
        $result  = mysqli_query($this->con,$sql);
        
        while($row = mysqli_fetch_assoc($result))
        {
            $array[] = $row;
        }
        return $array;
    }

    public function insert_product($table,$fileds) 
    {
        //"INSERT INTO Table_name (,,) VALUES ('','')";
        $sql = "";
        $sql .= "INSERT INTO ".$table;
        $sql .= "(".implode(",",array_keys($fileds)).") VALUES "; 
        $sql .= "('".implode("','",array_values($fileds))."')";
        $query = mysqli_query($this->con,$sql);
        if($query)
        {
            return true;
        }
    }

}

$obj = new action;


?>