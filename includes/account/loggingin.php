<?php
    include 'config.php';
    $info = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $myusername = mysqli_real_escape_string($conn, $_POST["txtUsername"]);
        $mypassword = mysqli_real_escape_string($conn, $_POST["txtPassword"]);

        $sql = "SELECT * FROM user WHERE Username = '$myusername'";
        $result = mysqli_query($conn,$sql);
        if ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
            $decryptpassword = password_verify($mypassword, $row['Password']);
            if ($decryptpassword == false) {
                header("Location: login.php?=login=error");
                $info = ("Your Username or password is incorrect");

            } elseif ($decryptpassword == true) {
                $_SESSION['login'] = $row['UserID'];
                header("Location: index.php");
            }
        }
    }
?>