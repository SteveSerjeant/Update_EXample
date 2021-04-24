<?php
include_once ("config.php");

if (isset($_POST['update'])){

    $posted = true;
    $UserID = $conn -> real_escape_string($_POST['id']);
    $forename = $conn -> real_escape_string($_POST['forename']);
    $surname = $conn -> real_escape_string($_POST['surname']);
    $email = $conn -> real_escape_string($_POST['email']);
//    $password = $conn -> real_escape_string($_POST['password']);
//    $password = password_hash($password, PASSWORD_DEFAULT);
//    $role = $conn -> real_escape_string($_POST['role']);
    $password = "";
    $role = "";

    $result = mysqli_query($conn , "CALL UpdateUser('$forename','$surname','$email','$password','$role','$UserID');");
    echo '<font color="green">Data updated successfully.</font>';
    header("Location: index.php");

//    if(empty($forename) || empty($surname) || empty($email)) {
//
//        if(empty($forename)) {
//            echo '<font color="red">Name field is empty.</font><br>';
//        }
//
//        if(empty($surname)) {
//            echo '<font color="red">Age field is empty.</font><br>';
//        }
//        if(empty($email)) {
//            echo '<font color="red">Email field is empty.</font><br>';
//        }
////        if(empty($password)) {
////            echo '<font color="red">Password field is empty.</font><br>';
////        }
////        if(empty($role)) {
////            echo '<font color="red">Role field is empty.</font><br>';
////        }
//        echo '<br><a href="javascript:self.history.back();">Go Back</a>';
//    } else {
//        $result = mysqli_query($conn , "CALL UpdateUser('$forename','$surname','$email','$password','$role','$UserID');");
//        echo '<font color="green">Data updated successfully.</font>';
//        header("Location: index.php");
//    }
}
?>
