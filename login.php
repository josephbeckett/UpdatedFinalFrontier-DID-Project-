<?php
include 'includes/account/loggingin.php';
session_start();
$info = "";
?>
<html lang="en" class="no-js">
	<head>

    <title>Login</title>
		<?php
            include 'includes/basewebsite/extraimports.php';
        ?>
	</head>
	<body>
	<!-- Page Loader -->
    <!-- <?php
            include 'includes/basewebsite/pageloader.php';
        ?> -->
    <!-- Navbar -->
        <?php
            include 'includes/basewebsite/basenavbar.php';
        ?>

        <!-- Background animation -->
    <div class="demo-1">
        <div class="content">
            <div id="large-header" class="large-header">
                <canvas id="demo-canvas"></canvas>
                <h1 class="main-title-account"><span class="thin">Login</span></h1>
            </div>      
        </div>
    </div>
    <div class="loginform">
        <div class="container center">
            <form method="post">
                <div class="container">
                    <div class="input-field">
                        <input type="text" name="txtUsername" required>
                        <label for="txtUsername">Username</label>
                    </div>
                    <div class="input-field">
                        <input type="password" name="txtPassword" required>
                        <label for="txtPassword">Password</label>
                    </div>
                    <button class="waves-effect waves-light btn" type="submit">Login</button>

                </div>
            </form> 
            <h4><?php
                echo ($info);
            ?></h4>  
        </div>  
    </div>


	<!-- javascript and jquery imports -->
    <?php
    include 'includes/basewebsite/jsimports.php';
    ?>
	</body>
</html>
