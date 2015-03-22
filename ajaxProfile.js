function initialDisplayArg(email)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			var response = xmlhttp.responseText;
					console.log(response);
	
			response = JSON.parse(response);
			console.log(response);
			document.getElementById("emailField").value = response.emailID;
			console.log(response.emailID);
			document.getElementById("nameField").value = response.name;
					console.log(response.name);
	
			document.getElementById("contactField").value = response.contact;
			//document.getElementById("addressField").value = response.address;
		//document.getElementById("text").innerHTML=xmlhttp.responseText['a'];
		console.log(xmlhttp.responseText);
		}
	}
	var parameters = "emailID=" + email + "&edit_option=0";
	xmlhttp.open("POST","profile_operations.php?" + parameters ,true);
	xmlhttp.send();
}

function editNameArg(email,name)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			var response = xmlhttp.responseText;
					console.log(response);
	
			response = JSON.parse(response);
			console.log(response);
			console.log(response.emailID);
			document.getElementById("nameField").value = response.name;
					console.log(response.name);
	
			//document.getElementById("addressField").value = response.address;
		//document.getElementById("text").innerHTML=xmlhttp.responseText['a'];
		console.log(xmlhttp.responseText);
		}
	}
	var parameters = "emailID=" + email + "&edit_option=1&name=" + name;
	console.log(parameters);
	xmlhttp.open("POST","profile_operations.php?" + parameters ,true);
	xmlhttp.send();
}

function editContactArg(email,contact)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			var response = xmlhttp.responseText;
					console.log(response);
	
			response = JSON.parse(response);
			console.log(response);
			console.log(response.emailID);
			document.getElementById("contactField").value = response.contact;
					console.log(response.name);
	
			//document.getElementById("addressField").value = response.address;
		//document.getElementById("text").innerHTML=xmlhttp.responseText['a'];
		console.log(xmlhttp.responseText);
		}
	}
	var parameters = "emailID=" + email + "&edit_option=2&contact=" + contact;
	xmlhttp.open("POST","profile_operations.php?" + parameters ,true);
	xmlhttp.send();
}

function editAddressArg(email,address)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			var response = xmlhttp.responseText;
					console.log(response);
	
			response = JSON.parse(response);
			console.log(response.emailID);
			document.getElementById("addressField").value = response.address;
					console.log(response.name);
	
			//document.getElementById("addressField").value = response.address;
		//document.getElementById("text").innerHTML=xmlhttp.responseText['a'];
		console.log(xmlhttp.responseText);
		}
	}
	var parameters = "emailID=" + email + "&edit_option=3&address=" + address;
	xmlhttp.open("POST","profile_operations.php?" + parameters ,true);
	xmlhttp.send();
}