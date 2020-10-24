
function reg_form(str)
{
	if(str.uname.value=="")
	{
	document.getElementById("msg1").innerHTML="! Please enter Some Value in User Name";
	str.uname.focus();
	return false;
	}
	
	if(!str.uname.value.match(/^[a-zA-Z]{1,}$/))
	{
	document.getElementById("msg1").innerHTML="! Please enter Only Character Value";
	str.uname.focus();
	return false;
	}
	
	if(str.pass.value=="")
	{
	document.getElementById("msg1").innerHTML="! Please enter Some Value in Password";
	str.pass.focus();
	return false;
	}
	
	if(str.pass.value.length<8)
	{
	document.getElementById("msg1").innerHTML="! Please enter minimum 8 digit length";
	str.pass.focus();
	return false;
	}
	
	if(str.email.value=="")
	{
	document.getElementById("msg1").innerHTML="! Please enter Some Value in Email";
	str.email.focus();
	return false;
	}
	
	if(!str.email.value.match(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,3})+$/))
	{
	document.getElementById("msg1").innerHTML="! Please enter Correct Email Address";
	str.email.focus();
	return false;
	}
	
	

	if(str.photo.value=="")
	{
	document.getElementById("msg1").innerHTML="! Please Upload Photo";
	str.photo.focus();
	return false;
	}
	
	if(str.resume.value=="")
	{
	document.getElementById("msg1").innerHTML="! Please Upload Your Resume";
	str.resume.focus();
	return false;
	}
}
	
	//below function is for image validation
	function check(file)
	{
	var filename=file.value;
	var ext=filename.substring(filename.lastIndexOf('.')+1);
		if(ext=="jpg" || ext=="png" || ext=="jpeg" || ext=="gif" || ext=="JPG" || 
		ext=="PNG" || ext=="JPEG" || ext=="GIF")
		{
		document.getElementById("submit").disabled=false;
		document.getElementById("msg1").innerHTML="";
		}
		else
		{
		document.getElementById("msg1").innerHTML="! Please upload only JPG , GIF , JPEG File";
		document.getElementById("submit").disabled=true;
		}
	} 
	
	//Below Function is or PDF file Validation
	function check1(file)
	{
	var filename=file.value;
	var ext=filename.substring(filename.lastIndexOf('.')+1);
		if(ext=="pdf")
		{
			document.getElementById("submit").disabled=false;
			document.getElementById("msg1").innerHTML="";
		}
		else
		{
		document.getElementById("msg1").innerHTML="! Please upload only Pdf File";
		document.getElementById("submit").disabled=true;
		}
	}
	
	