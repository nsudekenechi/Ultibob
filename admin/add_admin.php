<?php
$title = "Add Admin";
require_once("./includes/header.php");

if ($adminType != "High") {
    header("Location:./dashboard.php");
}
?>
<div id="content" class="main-content">

    <?php
        if(isset($_GET["edit_admin"])){
            $id = $_GET["edit_admin"];
            $query="SELECT * FROM login WHERE admin_id='$id'";
            $result=mysqli_query($conn,$query);
            $row=mysqli_fetch_assoc($result);
            ?>
    <form action="./handlers/edit_handler.php" method="POST" enctype="multipart/form-data">

        <div class="px-3 py-5">
            <h5>Edit an admin</h5>
            <div class="row my-4">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                    <h6 class="my-3">Admin Email</h6>
                    <input type="text" name="admin_email" required class="form-control" placeholder="Enter Email..."
                        id="" value="<?=$row["admin_email"];?>">

                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                    <h6 class="my-3">Admin Email</h6>
                    <select name="admin_type" class="form-control">
                        <?php 
                            if($row["admin_type"]=="Low"){
                                ?>
                        <option value="Low">Low</option>
                        <option value="High">High</option>
                        <?php
                            }else{
                                ?>
                        <option value="High">High</option>

                        <option value="Low">Low</option>
                        <?php
                            }
                        ?>

                    </select>

                </div>
            </div>
            <div class="field-wrapper ">
                <button type="submit" class="btn btn-primary " value="" name="edit_admin">Edit Admin</button>
            </div>
        </div>

        <input type="text" hidden value="<?=$id;?>" name="id">
    </form>
    <?php
        }else{
            ?>
    <form action="./handlers/add_handler.php" method="POST" enctype="multipart/form-data">

        <div class="px-3 py-5">
            <h5>Add an admin</h5>
            <div class="row my-4">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                    <h6 class="my-3">Admin Email</h6>
                    <input type="text" name="admin_email" required class="form-control" placeholder="Enter Email..."
                        id="">

                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                    <h6 class="my-3">Admin Email</h6>
                    <select name="admin_level" class="form-control">
                        <option value="Low">Low</option>
                        <option value="High">High</option>
                    </select>

                </div>
            </div>
            <div class="field-wrapper ">
                <button type="submit" class="btn btn-primary " value="" name="add_admin">Add Admin</button>
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

                                <th>Admin Username</th>
                                <th>Admin Email </th>
                                <th>Admin Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM `login` WHERE admin_username!='$username'";
                            $result = mysqli_query($conn, $query);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $i = 0;
                            ?>
                            <tr>
                                <td class="checkbox-column"> 1 </td>
                                <input type="text" hidden class="admin_id" value="<?= $row["admin_id"]; ?>">

                                <td>
                                    <div class="d-flex">
                                        <p class="align-self-center mb-0 user-name"> <?= $row["admin_username"]; ?></p>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex">

                                        <p class="align-self-center mb-0 user-name"> <?= $row["admin_email"]; ?></p>
                                    </div>
                                </td>


                                <td>
                                    <div class="d-flex">

                                        <p class="align-self-center mb-0 user-name"> <?= $row["admin_type"]; ?></p>
                                    </div>
                                </td>




                                <td style="display:flex; gap:30px;">
                                    <a class="text-danger delete_admin"
                                        href="handlers/delete_handler.php?delete_admin=<?=$row['admin_id'];?>"
                                        title="Delete">
                                        <i class=" bi-trash"></i>
                                    </a>

                                    <a class="text-success " href="./add_admin.php?edit_admin=<?=$row['admin_id'];?>"
                                        title="Edit">
                                        <i class="bi-pen"></i>
                                    </a>

                                    <a class="suspend" title="<?=$row["suspend"]== "false"? 'Suspend':'UnSuspend'?>"
                                        data-id="<?=$row['admin_id'];?>">
                                        <?php
                                            if($row["suspend"]== "false"){
                                                ?>
                                        <i class="bi-eye-slash"></i>

                                        <?php
                                            }else{
                                                ?>
                                        <i class="bi-eye"></i>

                                        <?php
                                            }
                                        ?>
                                    </a>

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
<script>
const deleteAdmins = document.querySelectorAll(".delete_admin");
const adminId = document.querySelectorAll(".admin_id");
deleteAdmins.forEach((deleteAdmin, index) => {
    deleteAdmin.onclick = function() {

        fetch(`./handlers/delete_handler.php?deleteall_admin=${adminId[index].value}`).then(e => e.text())
            .then(e => {
                if (e == "true") {
                    swal("Deleted", "", "success")
                }
            })
    }
})

const makeRequest = async (id, suspend) => {
    let req = await fetch(`./handlers/edit_handler.php?suspend_admin=${id}`);
    let res = await req.text();
    let title = "";
    if (res === "false") {
        title = "Suspend";
        suspend.querySelector("i").classList.replace("bi-eye", "bi-eye-slash")
    } else {
        title = "UnSuspend";
        suspend.querySelector("i").classList.replace("bi-eye-slash", "bi-eye")
    }
    suspend.setAttribute("title", title);
}
const suspends = document.querySelectorAll(".suspend");
suspends.forEach(suspend => {
    suspend.onclick = () => {
        makeRequest(suspend.dataset.id, suspend)

    }
})
</script>