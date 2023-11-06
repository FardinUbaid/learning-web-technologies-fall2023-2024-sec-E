<?php

function updateUser($userId, $newPassword,$password) {
    $con = getConnection();
    $newPassword = mysqli_real_escape_string($con, $newPassword); 

    if($newPassword==$password){
        echo"This password is already in use. Try Again";
        header('location: ../View/changepass.php');
    }else{

    $sql = "UPDATE users SET password = '$newPassword' WHERE user_id = $userId";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}
}
?>