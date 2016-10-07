function formVal(){
	var user = document.getElementById("username").value;
	var pass = document.getElementById("password").value;
	var shards = document.getElementById("shards").value;
	var arrows = document.getElementById("arrows").value;
	var swords = document.getElementById("swords").value;
	console.log(user);
	console.log(pass);
	console.log(shards);
	console.log(arrows);
	console.log(swords);
	if(user.search("@")==-1){
		alert("Username field is required and must be in the form of an email address.");
		return false;
	}
	else if(pass==null||pass==""){
		alert("Password field is required.");
		return false;
	}
	else if(shards<0||arrows<0||swords<0){
		alert("You can't order a negative amount of items, silly!");
		return false;
	}
}