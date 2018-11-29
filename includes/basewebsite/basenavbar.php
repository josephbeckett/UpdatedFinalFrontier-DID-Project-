 <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="topnav" id="myTopnav">
  <div class="navwrapper"></div>
    <a href="index.php">Home</a>
    <a href="stellar.php">Solar System</a>
    <a href="interstellar.php">Galactic </a>
    <a href="intergalactic.php">Extragalactic</a> 
    <?php 
      if (!isset($_SESSION['login'])) { ?>
      <a href="signup.php">Sign Up</a>
      <a href="login.php">Login</a>
    
    <?php 
      } else { 
    ?>
    <a href="quiz.php">Quiz</a> 
    <a href="account.php">Account</a> 
    <a href="includes/account/logout.php">Logout</a>
    <?php 
      }
    ?>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div> 
