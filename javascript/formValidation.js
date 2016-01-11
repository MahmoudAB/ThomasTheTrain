function checkForm() { 
	var fname = document.getElementById("fname").value;

	var lname = document.getElementById("lname").value;

	var email = document.getElementById("email").value;

	var phone = document.getElementById("phone").value;

	var passwrd1 = document.getElementById("passwrd1").value;

	var passwrd2 = document.getElementById("passwrd2").value;
	var adress = document.getElementById("adress").value;

	var city = document.getElementById("city").value;

	var province = document.getElementById("province").value;

	var postCode = document.getElementById("postCode").value;





	var checkName = /^[a-zA-Z]+$/;
	if(!checkName.test(fname)) {
		alert("Error: only letters and hyphen allowed in first name!"); 
		return false; 
	} 
	
	

	if(!checkName.test(lname)) {
		alert("Error: only letters and hyphen allowed in last name!"); 
		return false; 
	} 

	var checkAdress = /^[a-zA-Z\s\d\/]*\d[a-zA-Z\s\d\/]*$/;
	if(!checkAdress.test(adress)) {
		alert("Error: incorrect adress!"); 
		return false; 
	} 
	
	if(!checkName.test(city)) {
	alert("Error: Error in city!"); 
	return false; 
	} 
	if(!checkName.test(province)) {
	alert("Error: Error in province!"); 
	return false; 
	}

	var checkPostalCode = /^[A-Za-z]\d[A-Za-z]\-?\d[A-Za-z]\d$/;
	if(!checkPostalCode.test(postCode)) {
		alert("Error: incorrect postal code!"); 
		return false; 
	} 


	var checkPhone = /^\(\d{3}\)\d{3}\-\d{4}$/; 
	if(!checkPhone.test(phone)) {
		alert("Error: phone number format should be (xxx)xxx-xxxx!"); 
		return false; 
	} 
	
	var checkEmail = /^\S+@\S+\.\S+$/;
	if(!checkEmail.test(email)) {
		alert("Error: email address should have at least one period, and one @!"); 
		return false; 
	} 
	var a = document.getElementById("Month");
	var seleca=a.options[a.selectedIndex].value;
	if(seleca == "err1"){
				alert("Error : Month not chosen");
	}
	var b = document.getElementById("Day");
	var selecb=b.options[b.selectedIndex].value;
		if(selecb == "err2"){
				alert("Error : Day not chosen");
	}	
	var c = document.getElementById("Years");
 	var selecq=c.options[c.selectedIndex].value;
 		if(selecq === "err33"){
				alert("Error : Year not chosen");
	}

	var d = document.getElementById("zone");
 	var selecq=c.options[c.selectedIndex].value;
 		if(selecq === "err4"){
				alert("Error : Zone not chosen");
	}
		
	if(passwrd1 != passwrd2){
		alert("Error: password confirmation must match the password!");
		return false;
	}
	var checkPass = /([A-Za-z]\d|\d[A-Za-z])/;
	if(!checkPass.test(passwrd1) && passwrd1.length >= 6) {
		alert("Error password: letters and digits only and must contain at least one of each and at least 6 characters longs!"); 
		return false; 
	} 


	alert("congratulations! Register success!");
	return true;
} 

