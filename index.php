<?php
session_start();
if (isset($_GET['log'])) {

    unset($_SESSION['user']);
    session_destroy();
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Thomas The Train</title>
<link rel="stylesheet" type="text/css" href="css/Q4.css">
<script type="text/javascript" src="javascript/Q4JS.js"></script>
<script type="text/javascript" src="logOut.js"></script>

</head>
<body>
<header>
<a href="index.php"><img src="picture/train.jpg" alt="title"></img></a><br>
<p id="time"></p>
<script>
document.getElementById("time").innerHTML = Date();
</script>
</header>
<nav>
   <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="schedule.php">Schedule</a></li> 
      <li><a href="nextTrain.php">Next Train</a></li>
	  <li><a href="register.php">Register</a></li>
	  <li><a href="purchaseTicket.php">Purchase</a></li>
	  <li><a href="carpooling.php">Carpooling</a></li>
	       <?php
        if (!isset($_SESSION['user'])) {
            echo '<li><a href="login.php?">Login</a></li>';
        } else {

            echo '<li><a href="index.php?log=out" onclick="logout()">Logout</a></li>';
        }
        ?>
	 

    </ul>
</nav>
<section>

<center>
	<h2>Thomas the train</h2></center>
	<ul>
		<li>Do you want to to arrive to your destination promptly?</li>
		<li>Do you want to take the train in full confort and tranquility?</li>
		<li>Are you tired of paying too muuch money for train transportation that leaves you disapointed?</li>
		<li>Dont you wish you had wifi in the train?</li>
	</ul>
<center>
	<h3>Look no further!!</h3>
		<p>Ride the train with full tranquility and confort with <strong> Thomus the train</strong> Take advantage of the free wifi and tarif promotions offered.</p>
		<p>You're journey starts now</p>
		<img src="picture/thomas2.jpg" alt="thomas the train"></img>
		
</center>
  

</section>
<footer>
Check out the <a href="privacyStatement.php">Privacy Statement   </a>  or   
<a href="contactUs.php">Contanct Us</a></footer>

</footer>
</body>
</html>