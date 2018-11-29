<?php
    include 'includes/account/accountdetails.php';
?>
<html lang="en" class="no-js">
	<head>
		<title>Login Home Page</title>
		<?php
			include 'includes/basewebsite/imports.php';
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
		<!-- Content -->
		<div class="container demo-1">
			<div class="content">
				<div id="large-header" class="large-header">
					<canvas id="demo-canvas"></canvas>					
					<h1 class="main-title">Welcome <?php echo $row['Username'];?><br>to<span class="thin"> The Final Frontier</span></h1>
				</div>
			</div>
		</div>
		<!-- javascript and jquery imports -->
		<?php
			include 'includes/basewebsite/jsimports.php';
		?>
	</body>
</html>