<?php
session_start();
$warning = '';
include 'formValidation2.php';
if ($warning !== '') {
    echo "<script type='text/javascript'>alert('$warning');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Thomas The Train</title>
<link rel="stylesheet" type="text/css" href="css/Q4.css">
<script type="text/javascript" src="javascript/formValidation.js"></script>

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
	  <li><a href="login.php">Login</a></li>

	 

    </ul>
</nav>
<section>
	  <section>
  <h1>Registration Page</h1>
		<form name="register" method="post">
		     <h3>Personal Information</h3>

			<label>First Name: <input type = "text" name="fname" value="" size="30" maxlength="30" required="required"/></label><br /><br />

			<label>Family Name: <input type = "text" name="lname" value="" size="30" maxlength="30" required="required"/></label><br /><br />

			<label>Civic Adress: <input type = "text" name="adress" value="" size="30" required="required"/></label><br /><br />

			<label>City: <input type = "text" name="city" value="" size="30" required="required"/></label><br /><br />

			<label>Province: <input type = "text" name="province" size="30" required="required"/></label><br /><br />

			<label>Postal code: <input type = "text" name="postCode"  size="30" maxlength="6" required="required"/></label><br /><br />

			<label>Date of Birth</label>

			<select name="Month">
						<option value="err1" selected> - Month - </option>
						<option value="January">January</option>
						<option value="Febuary">Febuary</option>
						<option value="March">March</option>
						<option value="April">April</option>
						<option value="May">May</option>
						<option value="June">June</option>
						<option value="July">July</option>
						<option value="August">August</option>
						<option value="September">September</option>
						<option value="October">October</option>
						<option value="November">November</option>
						<option value="December">December</option>
					</select>

			<select name="Day">
						<option value="err2" selected> - Day - </option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
			</select>

			<select name="Years">
						<option value="err33" selected> - Year - </option>
						<option value="2015">2015</option>
						<option value="2014">2014</option>
						<option value="2013">2013</option>
						<option value="2012">2012</option>
						<option value="2011">2011</option>
						<option value="2010">2010</option>
						<option value="2009">2009</option>
						<option value="2008">2008</option>
						<option value="2007">2007</option>
						<option value="2006">2006</option>
						<option value="2005">2005</option>
						<option value="2004">2004</option>
						<option value="2003">2003</option>
						<option value="2002">2002</option>
						<option value="2001">2001</option>
						<option value="2000">2000</option>
						<option value="1999">1999</option>
						<option value="1998">1998</option>
						<option value="1997">1997</option>
						<option value="1996">1996</option>
						<option value="1995">1995</option>
						<option value="1994">1994</option>
						<option value="1993">1993</option>
						<option value="1992">1992</option>
						<option value="1991">1991</option>
						<option value="1990">1990</option>
						<option value="1989">1989</option>
						<option value="1988">1988</option>
						<option value="1987">1987</option>
						<option value="1986">1986</option>
						<option value="1985">1985</option>
						<option value="1984">1984</option>
						<option value="1983">1983</option>
						<option value="1982">1982</option>
						<option value="1981">1981</option>
						<option value="1980">1980</option>
						<option value="1979">1979</option>
						<option value="1978">1978</option>
						<option value="1977">1977</option>
						<option value="1976">1976</option>
						<option value="1975">1975</option>
						<option value="1974">1974</option>
						<option value="1973">1973</option>
						<option value="1972">1972</option>
						<option value="1971">1971</option>
						<option value="1970">1970</option>
						<option value="1969">1969</option>
						<option value="1968">1968</option>
						<option value="1967">1967</option>
						<option value="1966">1966</option>
						<option value="1965">1965</option>
						<option value="1964">1964</option>
						<option value="1963">1963</option>
						<option value="1962">1962</option>
						<option value="1961">1961</option>
						<option value="1960">1960</option>
						<option value="1959">1959</option>
						<option value="1958">1958</option>
						<option value="1957">1957</option>
						<option value="1956">1956</option>
						<option value="1955">1955</option>
						<option value="1954">1954</option>
						<option value="1953">1953</option>
						<option value="1952">1952</option>
						<option value="1951">1951</option>
						<option value="1950">1950</option>
						<option value="1949">1949</option>
						<option value="1948">1948</option>
						<option value="1947">1947</option>
	
			</select>
			<br /><br />

			<label>Primay Phone Number:<input type = "tel" name="phone" placeholder="(XXX)XXX-XXXX" size="20" required="required"/></label><br /><br />

			<label>Secondary Phone Number (optional):<input type = "tel" name="phone2" placeholder="(XXX)XXX-XXXX" size="20"/></label><br /><br />

			<label>Email: <input type = "email" name="email" value="" size="40" maxlength="40" required="required"/></label><br /><br />

			<label>Zone:<label>
			
			<select name="zone">
              <option name="err4">Choose a Zone</option>
              <option name="zone1">zone1</option>
              <option name="zone2">zone2</option>
            </select><br><br>

            <label>Station you want to carpool in?<input type = "text" name="carpoolStation" value="" size="30" maxlength="30" required="required"/></label><br /><br />

            <label>What time do you want to take the train?<input type = "text" name="carpoolTime" value="" size="30" maxlength="30" required="required"/></label><br /><br />


			<h3>Login Information</h3><br>
			<label>Password:<input type = "password" name="passwrd1" required="required"/></label><br />
			<label>Re-enter password:<input type = "password" name="passwrd2" required="required"/></label><br /><br />
			<input type = "reset" value="Reset Form" /> 
			<input type = "submit" value="Submit Form" /><br /><br />
		</form>

</section>
<footer>
Check out the <a href="privacyStatement.php">Privacy Statement   </a>  or   
<a href="contactUs.php">Contanct Us</a></footer>

</footer>
</body>
</html>