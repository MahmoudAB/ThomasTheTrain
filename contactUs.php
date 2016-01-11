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

<h1>Contact us</h1>
	  <p>
	    <h3>Mailing Address:</h3><br/>
	   	ThomasTheTrain<br/>
	    1234 Trains<br/>
	    Montreal, Quebec  y7f2p0<br/>
	    Canada<br/>
	   
	  </p>
	  <p>
		<a href="mailto:mahmoudAB93@hotmail.com"><img src="picture/mail.png"></a>
	  </p>
  </section>

</section>
<footer>
Check out the <a href="privacyStatement.php">Privacy Statement   </a>  or   
<a href="contactUs.php">Contanct Us</a></footer>

</footer>
</body>
</html>