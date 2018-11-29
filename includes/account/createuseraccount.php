<?php
include 'config.php';
session_start();
$info = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($conn,$_POST["txtUsername"]);
    $mypassword = mysqli_real_escape_string($conn,$_POST["txtPassword"]);
    $mydateofbirth = mysqli_real_escape_string($conn,$_POST["txtDateOfBirth"]);
    // encrypt password
    $encryptpassword = password_hash($mypassword, PASSWORD_DEFAULT);
    // insert into database 
    $sql = "INSERT INTO user (Username, Password, DateOfBirth)
    VALUES ('$myusername', '$encryptpassword', '$mydateofbirth')";
    if (mysqli_query($conn, $sql)) {
        header('Location: index.php');
        $info = "User Created Successfully!";
    } else {
        $info ="Unable to Add User!";
    }
}

?>