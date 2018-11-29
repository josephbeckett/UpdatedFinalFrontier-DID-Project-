<?php
    include 'includes/account/session.php';
?>
<html lang="en" class="no-js">
	<head>
		<title>Landing Page</title>
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
		<div class="container demo-1 no-animate">
			<div class="content">
				<div id="large-header" class="large-header">
					<canvas id="demo-canvas"></canvas>
					<h1 class="main-title-account"><span class="thin">Account</span></h1>

				</div>
			</div>
		</div>

		<div class="container">
			<div class="accountdiv">
				<table class="w3-border">
					<tr>
						<th>Username</th>
						<td><?php echo($row['Username']) ?></td>
					</tr>
					<tr>
						<th>Date of Birth</th>
						<td><?php echo ($row['DateOfBirth']) ?></td>
					</tr>
					<tr>
						<th>High Score</th>
						<td></td>
					</tr>
				</table>
			</div>
		</div>
		<!-- javascript and jquery imports -->
		<?php
    include 'includes/basewebsite/jsimports.php';
    ?>

	</body>
</html>