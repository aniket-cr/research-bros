function addLabArg(emailID,name,description)
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
	var parameters = "emailID=" + emailID + "&add_lab=1&name=" + name + "&description=" + description;
	console.log(parameters);
	xmlhttp.open("POST","lab_operations.php?" + parameters ,true);
	xmlhttp.send();
}


function displayLabsArg(emailID)
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
			var result = "<table>";
			for(var i=0;i<response.length;i++)
			{
				result = result + "<tr> <td>" + response[i]["name"] + "</td> <td> " + response[i]["description"] + 
							"</td> </tr>";
			}
			result = result + "</table>";
			document.getElementById("display_labs").innerHTML = result;
			console.log(result);
			//document.getElementById("addressField").value = response.address;
		//document.getElementById("text").innerHTML=xmlhttp.responseText['a'];
		}
	}
	var parameters = "emailID=" + emailID + "&add_lab=0";
	console.log(parameters);
	xmlhttp.open("POST","lab_operations.php?" + parameters ,true);
	xmlhttp.send();
}
