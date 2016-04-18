function submitorder(){
	console.log("submit order");
	var xhttp;

	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var street = document.getElementById("street").value;
	var suburb = document.getElementById("suburb").value;
	var postcode = document.getElementById("postcode").value;

	var e = document.getElementById("state");
	var state = e.options[e.selectedIndex].value;

	var e = document.getElementById("jars_ordered");
	var jars_ordered = e.options[e.selectedIndex].value;
	


	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) {
		if (xhttp.responseText == "success"){
			document.getElementById("order-form").style.display = "none";
			document.getElementById("success").style.display = "block";
		} else {
			document.getElementById("error").innerHTML = xhttp.responseText;
		}
	}
	};
	xhttp.open("GET", "server.php?name="+name+"&email="+email+"&street="+street+"&suburb="+suburb+"&postcode="+postcode+"&state="+state+"&jars_ordered="+jars_ordered, true);
	xhttp.send();   
	return false;
}

//rVnn8F?-f