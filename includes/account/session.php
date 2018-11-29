<?php 
    include 'config.php';
    session_start();

    $user_check = $_SESSION["user_loggedin"];

    $ses_sql = mysqli_query($conn,"SELECT * FROM user WHERE UserID = '$user_check'");

    $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

    $_SESSION['user_loggedin'] = $row['UserID'];   
    
    // if (isset($_SESSION['login'])) {
        
    // }
?>