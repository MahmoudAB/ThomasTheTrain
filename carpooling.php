<?php
//include must log in to enter this tab
include 'mustLogin.php';
session_start();

//opening specific user friend list
 $fil33=$_SESSION['user'];
  $my_file3 = $fil33.'_friends.txt';
  $handle3 = fopen($my_file3, 'a') or die('Cannot open file:  '.$my_file3);

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
<center>

<?php
//opening list of people who will carpool at users station and time
$myFile = "carpooling.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
$a = explode("\n", $theData);
$assoc_array = [];
$my_array = explode("\n", $theData);
foreach($my_array as $line)
{
    $tmp = explode(" ", $line);
    $assoc_array[$tmp[1]] = $tmp[0];
}
fclose($fh);
echo "<form method='post'>";

//displaying users
foreach($assoc_array as $key => $value)
  if($_SESSION['time'] === $value){
echo "<br/><input type='checkbox' name='carpoolPeople[]' value='$key'/>$key<br>";
}
echo "<br><button name='Add' value='Add'>Add Friend</button>";
echo "<button name='Delete' value='Delete'>Delete Friend</button>";
echo "<br><br>Check Every User and press add friend to add the entire list to your friends list";
echo"</form>";
//opening friendslist
$fil2=$_SESSION['user'];
$myFile2 = $fil2.'_friends.txt';
$fh2 = fopen($myFile2, 'r');
$theData2 = fread($fh2, filesize($myFile2));
$arr2 = explode(",", $theData2);
 
if($arr2 == null) {
  echo '<br> you have no friends in your friendslist';
}else{ 
  echo '<br> Your Friends <br>';
    foreach($arr2 as $show){
      echo $show.'<br>';
    }

}
//adding friend since they are checkboxes the user can chek all usersd and add them
if ($_POST['Add']){
    echo '<br>';
 
 foreach($_POST['carpoolPeople'] as $peop => $val){
    $data2= $val.','; 
  }
          fwrite($handle3, $data2);
        fclose($handle3);
}
 if ($_POST['Delete']){
 foreach($_POST['carpoolPeople'] as $val){
while (($pos = array_search($val, $arr2)) !== false) {
    unset($arr2[$pos]);
}


    }
     foreach($arr2 as $valu){
    $data3= $valu.','; 
    echo $valu.',<br>';
  }
    fwrite($handle3, $data3);
        fclose($handle3);

 }



?>
</center>
</section>
<footer>
Check out the <a href="privacyStatement.php">Privacy Statement   </a>  or   
<a href="contactUs.php">Contanct Us</a></footer>

</footer>
</body>
</html>