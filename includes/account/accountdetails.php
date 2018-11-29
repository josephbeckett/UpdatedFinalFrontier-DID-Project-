<?php
    include 'session.php';
    $sql = "SELECT * FROM user WHERE UserID = '$_SESSION[user_loggedin]'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>