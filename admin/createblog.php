<?php
$title = "Create Blog";

require_once("./includes/header.php");

?>
<link rel="stylesheet" href="plugins/font-icons/fontawesome/css/regular.css">
<link rel="stylesheet" href="plugins/font-icons/fontawesome/css/fontawesome.css">
<!-- Summer Note -->
<link rel="stylesheet" href="assets/summernote-0.8.18-dist/summernote.min.css" />

<!-- include libraries(jQuery, bootstrap) -->
<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" /> -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <?php
    if (isset($_GET["edit_blog"])) {
        $blogid = $_GET["edit_blog"];
        $query = "SELECT * FROM create_blog WHERE blog_id='$blogid'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
      
    ?>
    <form action="./handlers/edit_handler.php" method="POST" enctype="multipart/form-data">

        <div class="px-3 py-5">
            <h5>Edit blog</h5>
            <div class="row mt-4">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <h6>Blog Title</h6>
                    <input type="text" name="blog_name" class="form-control" value="<?=$row['blog_title'];?>"
                        placeholder="Enter Title..." id="">

                </div>





                <div class="col-12 col-sm-12 col-md-6 col-lg-6 my-sm-4 my-md-0">
                    <h6>Blog Image</h6>
                    <div class="form-control p-0  m-0 d-flex align-items-center px-2">

                        <input type="file" name="blog_img" class="" accept=".jpeg,.jpg,.png,.gif">
                    </div>
                </div>

                <div class=" d-block col-12 col-sm-12 col-md-6 col-lg-12 mt-4">
                    <h6>Description</h6>
                    <textarea name="blog_description" placeholder="Write text...." id="summernote" rows="12"
                        class="form-control" style="resize: none;"><?=$row['blog_description'];?></textarea>
                </div>



            </div>

            <div class="field-wrapper my-3">
                <input type="text" value="<?= $row["blog_id"]; ?>" name="blog_id" hidden>

                <button type="submit" class="btn btn-primary add_beat" value="" name="edit_blog">Edit </button>
            </div>
        </div>


    </form>
    <?php
    } else {
    ?>
    <form action="./handlers/add_handler.php" method="POST" enctype="multipart/form-data">

        <div class="px-3 py-5">
            <h5>Create a blog</h5>
            <div class="row mt-4">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <h6>Blog Title</h6>
                    <input type="text" name="blog_name" class="form-control" placeholder="Enter Title..." id="">

                </div>





                <div class="col-12 col-sm-12 col-md-6 col-lg-6 my-sm-4 my-md-0">
                    <h6>Blog Image</h6>
                    <div class="form-control p-0  m-0 d-flex align-items-center px-2">

                        <input type="file" name="blog_img" class="" accept=".jpeg,.jpg,.png,.gif">
                    </div>
                </div>

                <div class=" d-block col-12 col-sm-12 col-md-6 col-lg-12 mt-4">
                    <h6>Description</h6>
                    <textarea name="blog_description" id="summernote" rows="12" class="form-control border"
                        style="resize: none;"></textarea>
                </div>



            </div>

            <div class="field-wrapper my-3">
                <input type="text" value="<?= $username; ?>" name="username" hidden>
                <button type="submit" class="btn btn-primary add_beat" value="" name="create_blog">Create Blog</button>
            </div>
        </div>


    </form>

    <div class="layout-px-spacing">
        <div class="row" id="cancel-row">

            <div class="col-xl-12 col-lg-12 col-sm-12 layout-top-spacing layout-spacing">

                <div class="widget-content widget-content-area br-6">
                    <table id="invoice-list" class="table table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th class="checkbox-column"> Record no. </th>
                                <th>Blog Id</th>
                                <th>Blog Title</th>
                                <th>Date Uploaded</th>
                                <th>Time Uploaded</th>

                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM `create_blog`";
                                $result = mysqli_query($conn, $query);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $blog_date = json_decode($row["blog_date"]);
                                        $i = 0;
                                ?>
                            <tr>
                                <td class="checkbox-column"> 1 </td>
                                <input type="text" hidden class="admin_id" value="<?= $row["blog_id"]; ?>">
                                <td>
                                    <div class="d-flex">
                                        <p class="align-self-center mb-0 user-name"> <?= $row["blog_id"]; ?></p>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex">
                                        <p class="align-self-center mb-0 user-name"> <?= $row["blog_title"]; ?></p>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex">
                                        <p class="align-self-center mb-0 user-name"> <?= $blog_date[0] ?></p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <p class="align-self-center mb-0 user-name"> <?= $blog_date[1] ?></p>
                                    </div>
                                </td>








                                <td>
                                    <div class="dropdown d-flex align-items-center justify-content-between">



                                        <a class=" action-edit text-primary"
                                            href="createblog.php?edit_blog=<?= $row['blog_id']; ?>"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-3">
                                                <path d="M12 20h9"></path>
                                                <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z">
                                                </path>
                                            </svg>Edit</a>

                                        <a class="action-delete text-danger"
                                            href="./handlers/delete_handler.php?delete_blog=<?= $row['blog_id']; ?>"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg>Delete</a>

                                    </div>
                                </td>


                            </tr>
                            <?php

                                    }
                                }
                                ?>


                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>


    <!--  END CONTENT AREA  -->
    <?php
    }
    ?>








</div>


<?php
require_once("./includes/footer.php");
?>
<script src="assets/js/scrollspyNav.js"></script>
<script src="plugins/font-icons/feather/feather.min.js"></script>
<script type="text/javascript">
feather.replace();
</script>
<script>
const delets = document.querySelectorAll(".action-delete");
const beatids = document.querySelectorAll(".beat_id")

delets.forEach((delet, index) => {
    delet.onclick = function() {
        fetch(`./handlers/delete_handler.php?deletebeat=${beatids[index].value}`).then(e => e.text()).then(
            e => {
                if (e == "true") {
                    swal("Deleted", "", "success")
                }
            })
    }
})
</script>
<script src="./discount.js"></script>
<script src="assets/summernote-0.8.18-dist/summernote.min.js"></script>
<script>
$(document).ready(function() {
    $("#summernote").summernote({
        placeholder: "Write Description",
        height: 300,

        backColor: "pink",
    });
});
</script>