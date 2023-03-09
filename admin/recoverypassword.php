<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Admin Panel || Recovery Password</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/authentication/form-1.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="assets/css/forms/switches.css">
</head>
<body class="form">
    <?php
    require_once('db/config.php');

    $email = $_GET["email"];
    $query = "SELECT * FROM login where admin_email='$email'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $username=$row["admin_username"];
    }else{
        header("Location:./index.php");
    }
    ?>

    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <div class="d-flex user-meta">
                            <img src="assets/img/90x90.jpg" class="usr-profile" alt="avatar">
                            <div class="">
                                <p class=""><?=$username;?></p>
                            </div>
                        </div>

                        <form class="text-left" action="handlers/forgotpassword_handler.php" method="POST">
                        <p class="">Enter Password Sent To Your Email</p>
                        <input type="text" hidden value="<?=$_GET["email"];?>" name="email">
                            <div class="form">

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input id="password" name="password" autocomplete="no" type="text" class="form-control" placeholder="Enter Recovery Password">
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="" name="recover_password">Recover password</button>
                                    </div>
                                    
                                </div>

                            </div>
                        </form>                        
                        <p class="terms-conditions" style="visibility: hidden;">© 2020 All Rights Reserved. <a href="dashboard.php">CORK</a> is a product of Designreset. <a href="javascript:void(0);">Cookie Preferences</a>, <a href="javascript:void(0);">Privacy</a>, and <a href="javascript:void(0);">Terms</a>.</p>

                    </div>                    
                </div>
            </div>
        </div>
        <div class="form-image">
            <div class="l-image">
            </div>
        </div>
    </div>

    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/authentication/form-1.js"></script>

</body>
</html>