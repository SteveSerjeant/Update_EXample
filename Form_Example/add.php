<?php

include_once ("config.php");

if (isset($_POST['submit'])){

    $posted = true;
    $forename = $conn -> real_escape_string($_POST['forename']);
    $surname = $conn -> real_escape_string($_POST['surname']);
    $email = $conn -> real_escape_string($_POST['email']);
    $password = $conn -> real_escape_string($_POST['password']);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $role = $conn -> real_escape_string($_POST['role']);

    if(empty($forename) || empty($surname) || empty($email) || empty($password) || empty($role)) {

        if(empty($forename)) {
            echo '<font color="red">Name field is empty.</font><br>';
        }

        if(empty($surname)) {
            echo '<font color="red">Age field is empty.</font><br>';
        }
        if(empty($email)) {
            echo '<font color="red">Email field is empty.</font><br>';
        }
        if(empty($password)) {
            echo '<font color="red">Password field is empty.</font><br>';
        }
        if(empty($role)) {
            echo '<font color="red">Role field is empty.</font><br>';
        }
        echo '<br><a href="javascript:self.history.back();">Go Back</a>';
    } else {
        $result = mysqli_query($conn , "CALL CreateUser('$forename','$surname','$email','$password','$role');");
        echo '<font color="green">Data added successfully.</font>';
        echo '<br><a href="index.php">View Result</a>';
    }
}
?>


