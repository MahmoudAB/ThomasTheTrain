<?php
session_start();


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

<br><br>

<form method="post">

	<label>Line:</label>
	<select name="lines">
		<option name="biboLine">Kanto Line</option>
		<option name="elpalo">Johto Line</option>
	</select><br><br>
	<label>Direction</label>
		<select name="direction">
		<option name="north">North</option>
		<option name="south">South</option>
	</select><br><br>
	<label>Station:</label>
		<label>Direction</label>
		<select name="stations">
		<option name="palet">Palet Town</option>
		<option name="viridian">Viridian City</option>
		<option name="pewter">Pewter City</option>
		<option name="cerulean">Cerulean City</option>
		<option name="vermillion">Vermillion City</option>
		<option name="newbark">New Bark Town</option>
		<option name="cherrygrove">Cherrygrove City</option>
		<option name="violet">Violet City</option>
		<option name="azalea">Azalea town</option>
		<option name="goldenord">Goldenord City</option>



	</select><br><br>
	<input type = "reset" value="Reset Form" /> 
	<input type = "submit" name='submitt' value="Submit Form" /><br> 
</form>
<?php
if(isset($_POST['submitt'])){
//get current time and display next 3 trains, since all trains take an hour to reach the next destination they all arive at the same time in each station.
date_default_timezone_set('US/Eastern');
$today = date('h:i:s', time());
 if(date('i')<30){
 	$hour=date('h');
 	$hour2=$hour+1;
 	$hour3=$hour2+1;
 	echo "<script type='text/javascript'>alert('Next 3 trains will arrive at '+$hour+':30, '+$hour2+':00, '+$hour2+':30');</script>";
 }else{
 	 $hour=date('h');
 	$hour2=$hour+1;
 	$hour3=$hour2+1;
 	echo "<script type='text/javascript'>alert('Next 3 trains will arrive at '+$hour2+':00, '+$hour2+':30, '+$hour3+':00');</script>";
 }
}
?>

</section>
<footer>
Check out the <a href="privacyStatement.php">Privacy Statement   </a>  or   
<a href="contactUs.php">Contanct Us</a></footer>

</footer>
</body>
</html>