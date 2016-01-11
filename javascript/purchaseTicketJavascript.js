function display(){
	var log=document.getElementById("user").value;
	var x=document.getElementById("tickets");
	var purch=x.options[x.selectedIndex].text;
	confirm("your username is "+log+" and you decided to purchase "+purch);

}