<?php
require_once("./admin/db/config.php");
if (isset($_GET["increase_view"])) {
    $title = $_GET["increase_view"];

    $query = "SELECT * FROM create_blog WHERE blog_title='$title'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $views = $row["blog_views"];
    $views += 1;
    $query = "UPDATE `create_blog` SET blog_views='$views' WHERE blog_title='$title'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo $views;
    }
}
