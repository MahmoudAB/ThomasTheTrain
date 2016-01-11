<?php 
//include must log in to enter this tab
include 'mustLogin.php';
//opening tarriff text to know the prices
$cost = file('tariff.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$file = 'db/members.txt';
$users = unserialize(file_get_contents($file));
$userInfo =  $users[$_SESSION['user']];
?>

<!DOCTYPE html>
<html>
<head>
<title>Thomas The Train</title>
<link rel="stylesheet" type="text/css" href="css/Q4.css">
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


  <form method='post'>
          <?php

          $count=0;
          $single=0;
          $six=0;
          echo'<br/><br/>';
          //implementing prices
          if($userInfo['zone']=='zone1'&$userInfo['year']>$cost[5]){
            $single=$cost[6];
            $six=$cost[6]*6;
            echo 'A Single fair will cost you $'.$cost[6].'<br/>Six fairs will cost you $'.$six;
          }
          if($userInfo['zone']=='zone1'&$userInfo['year']<$cost[9]){
            $single=$cost[9];
            $six=$cost[9]*6;
            echo 'A Single fair will cost you $'.$cost[9].'<br/>Six fairs will cost you $'.$six;
          }
          if($userInfo['zone']=='zone2'&$userInfo['year']>$cost[5]){
            $single=$cost[6];
            $six=$cost[6]*6;
            echo 'A Single fair will cost you $'.$cost[6].'<br/>Six fairs will cost you $'.$six;
          }
          if($userInfo['zone']=='zone2'&$userInfo['year']<$cost[9]){
            $single=$cost[9];
            $six=$cost[9]*6;
            echo 'A Single fair will cost you $'.$cost[9].'<br/>Six fairs will cost you $'.$six;
          }
          if($userInfo['zone']=='zone1'&$userInfo['year']>$cost[5]==false&userInfo['year']<$cost[9]==false){
            $single=$cost[1];
            $six=$cost[1]*6;
            echo 'A Single fair will cost you $'.$cost[1].'<br/>Six fairs will cost you $'.$six;
          }
       
           if($userInfo['zone']=='zone2'&$userInfo['year']>$cost[5]==false&$userInfo['year']<$cost[9]==false){
            $single=$cost[3];
            $six=$cost[3]*6;
            echo 'A Single fair will cost you $'.$cost[3].'<br/>Six fairs will cost you $'.$six;
          }
       echo'<br/><br/>';
          
          
          

          ?>
            <p>How many tickets would you like to purchase?</p>
            <select name="tickets">
              <option value="single">Single Fare </option>
              <option value="sixfares">Booklet Of 6 Fares</option>
            </select><br><br>

            <input type="submit" value="Puchase tickets" name="submitt" id="submit" onclick="display()"/><br /><br />
        </form>

        <?php
        //adding new purchase and showing old ones in specific user file
        if(isset($_POST['submitt'])){


    
    if($_POST['tickets']==='single'){
      $amount="Single Fair";
          $money=$single;
          $count++;

    }else{
        $amount="Six Fairs";
          $money=$six;
          $count++;
    }
  
     
        
                   
        date_default_timezone_set('US/Eastern');
        $today = date('h:i:s', time());
        $file2=$_SESSION['user'];
        $my_file = $file2.'.txt';
        $handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
        $data=$amount.' $'.$money.' '.$today."\n";
        fwrite($handle, $data);
        fclose($handle);
    

    $handle2 = fopen($my_file, 'r');
    
    $arrayy = explode("\n", file_get_contents($my_file));
    $arrlength=count($arrayy);
    echo 'You have '.$arrlength.' past purchases:<br/>';
    foreach($arrayy as $dat){
     echo $dat.'<br/>';
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