<?php
    require_once("../db/config.php");
    require_once("./function_handler.php");

    // Edit Admin
    if(isset($_POST["edit_admin"])){
        $POST = filter_var_array($_POST,FILTER_SANITIZE_STRING);
        extract($POST);
        $query = "UPDATE `login` SET admin_email='$admin_email',admin_type='$admin_type' WHERE admin_id='$id'";
        $result=mysqli_query($conn,$query);
        if($result){
            location(true,"add_admin.php","edit");
 
        }else{
          location(false,"add_admin.php","edit");

        }
      
    }
    // Suspend Admin
    if(isset($_GET["suspend_admin"])){
        $id=$_GET["suspend_admin"];
        $query = "SELECT * FROM `login` WHERE admin_id='$id'";
        $result=mysqli_query($conn,$query);
        $row=mysqli_fetch_assoc($result);
        $suspend=$row["suspend"] == "false" ? "true":"false";
        $query="UPDATE `login` SET `suspend`='$suspend' WHERE admin_id='$id'";
        $result=mysqli_query($conn,$query);
        if($result){
            echo $suspend;
        }
    }
    if(isset($_POST["edit_blog"])){
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
    $FILES = filter_var_array($_FILES, FILTER_SANITIZE_STRING);
    extract($POST);
    extract($FILES);
    $blog_name = ucwords($blog_name);
    $replacedName = str_replace(" ", "", $blog_name) . rand(0, 100);
    $blog_description=htmlspecialchars($_POST["blog_description"]);
    // If user enters new image
    if($blog_img["name"]){
        $blog_image = imageHandler("blog_img", $blog_id);
        $query = "UPDATE `create_blog` SET blog_title='$blog_name', blog_description = '$blog_description' WHERE blog_id='$blog_id'";

        
    }else{
        $query = "UPDATE `create_blog` SET blog_title='$blog_name', blog_description = '$blog_description' WHERE blog_id='$blog_id'";
    }

    $result = mysqli_query($conn,$query);
    if($result){
        location(true,"createblog.php","edit");
    }else{
        location(false,"createblog.php","edit");
    }
    }
?>