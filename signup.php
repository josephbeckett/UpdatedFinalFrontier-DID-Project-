<?php
	include 'includes/account/createuseraccount.php';
	session_start();
?>
<html lang="en">
	<head>
    <title>Sign Up</title>

		<!-- website imports -->
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
	  <div class="demo-1">
        <div class="content">
            <div id="large-header" class="large-header">
						<canvas id="demo-canvas"></canvas>
						</div>
				</div>
	  </div>
		<!-- sign up form -->
    <div class="container center">
      <div class="form-padding">
        <form class="col s12" method="post">
					<div class="container">
						<div class="row">
							<div class="input-field col s12">
									<input id="txtUsername" class="validate" name="txtUsername" type="text" required>
									<label for="txtUsername">Username</label>
							</div>
						</div>
						<div class="row">
								<div class="input-field col s12">
										<input id="txtPassword" name="txtPassword" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required  class="validate">
										<label for="txtPassword">Password</label>
								</div>
						</div>
						<div class="row">
								<div class="input-field col s12">
										<input id="txtDateOfBirth" name="txtDateOfBirth" type="date" class="datepicker" required>
								</div>
						</div>
						<button class="waves-effect waves-light btn" name="Submit" type="submit">Create</button>
					</div>
        </form>
      </div>
    </div>
		<?php echo ($info); ?>

		<!-- javascript and jquery imports -->
    <?php
			include 'includes/basewebsite/jsimports.php';
		?>
	</body>
</html>
