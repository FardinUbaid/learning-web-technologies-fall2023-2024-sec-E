<?php
session_start();
$username = $_REQUEST['name_edit'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email_edit'];
$dob = $_REQUEST['date_of_birth'];
$gender = $_REQUEST['gender'];


if (empty($username) || empty($phone) || empty($email) || empty($dob) || empty($gender)) {
    echo "null value";
} else {

    $user = isset($_SESSION['user']) ? $_SESSION['user'] : [];

    $user['username'] = $username;
    $user['phone'] = $phone;
    $user['email'] = $email;
    $user['date_of_birth'] = $dob;
    $user['gender'] = $gender;

    $_SESSION['user'] = $user;

    header('location: ../View/ViewProfile.php');
}
?>
