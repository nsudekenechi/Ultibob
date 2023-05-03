<?php



function generateId(int $number)
{
    $randId = null;
    for ($i = 1; $i <= $number - 2; $i++) {
        $randId .= rand(0, 9);
    }
    $prefix = ["A", "B", "C", "D", "E", "F"];

    $randId .= $prefix[rand(0, 5)];
    $randId .=  $prefix[rand(0, 5)];
    return $randId;
}

function logout()
{

    session_start();
    session_destroy();
    if (isset($_COOKIE["username"])) {
        $time = time() - 86400 * 30;
        setcookie("username", "ji ", $time, "/");
    }

    header("Location:../index.php");
}

function changeUsername($querytype, $newusername, $oldusername, $conn)
{

    $query = "UPDATE login set admin_$querytype='$newusername' WHERE admin_username='$oldusername'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        logout();
    } else {
        header('../admin_profile.php');
    }
}

function verifyPassword($username, $password, $conn)
{

    $query = "SELECT * from login where admin_username='$username' || admin_email='$username'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $hashpassword = $row["admin_password"];
        if (password_verify($password, $hashpassword)) {
            echo 'true';
        } else {
            echo 'false';
        }
    }
}

function updatePassword($confirmPassword, $email, $conn)
{
    $hashpassword = password_hash($confirmPassword, PASSWORD_DEFAULT);
    $query = "UPDATE `login` SET admin_password='$hashpassword' WHERE admin_email='$email'";
    $result = mysqli_query($conn, $query);
    $query2 = "DELETE FROM `forgot_password` WHERE admin_email='$email'";
    $result2 = mysqli_query($conn, $query2);
    if ($query) {
        header("Location:../index.php?alert=changepass_s");
    } else {
        header("Location:../index.php?alert=changepass_f");
    }
}








function  imageHandler($imageFile, $imageName)
{
    $imageFileName = $_FILES[$imageFile]['name'];
    $imageTmp = $_FILES[$imageFile]['tmp_name'];
    $imageDest = "../Img/";
    $imageExtension = pathinfo($imageFileName, PATHINFO_EXTENSION);
    //Concating rand to imagefilename,so that same file can be added the same time with multiple ids
    $imageFileNewName = $imageName . '.' . $imageExtension;
    $imageUpload = move_uploaded_file($imageTmp, $imageDest . $imageFileNewName);

    if ($imageUpload) {
        return $imageFileNewName;
    } else {
        return false;
    }
}

function location($message,$url,$type){
    if($message==true){
        header("Location:../$url?$type=s");
    }else{
        header("Location:../$url?$type=f");
    }
}