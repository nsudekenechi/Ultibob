<?php
require_once("../db/config.php");
require_once("./function_handler.php");
if(isset($_GET["delete_blog"])){
    $blog_id = $_GET["delete_blog"];
    $query = "SELECT * FROM create_blog WHERE blog_id='$blog_id'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    $image = $row["blog_image"];
    unlink("../Img/$image");

    // Delete from db
    $query = "DELETE FROM create_blog WHERE blog_id='$blog_id'";
    $result = mysqli_query($conn,$query);
    if($result){
        location(true,"createblog.php","del");
    }else{
        location(false,"createblog.php","del");
    }
    
}

if(isset($_GET["delete_admin"])){
    $admin_id = $_GET["delete_admin"];
   

    // Delete from db
    $query = "DELETE FROM login WHERE admin_id='$admin_id'";
    $result = mysqli_query($conn,$query);
    if($result){
        location(true,"add_admin.php","del");
    }else{
        location(false,"add_admin.php","del");
    }
    
}
?>