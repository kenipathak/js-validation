<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function validate()
{
	var unm=document.forms["myForm"]["unm"].value;
	if(unm==null ||unm=="")
	{
		alert('Please,Fill the UserName');
		return false;
	}
	
	var pass=document.forms["myForm"]["pass"].value;
	if(pass=="" || pass==null)
	{
		alert('Please,Fill the Password');
		return false;
	}
	var cpass=document.forms["myForm"]["cpass"].value;
	if(cpass=="" || cpass==null)
	{
		alert('Please,Fill the Confirm Password');
		return false;
	}
	
	if(pass==cpass)
	{
	}
	else
	{
		alert('Password Do not Match');
		return false;
	}
	
	var email=document.forms["myForm"]["email"].value;
	var filter=/^[a-zA-Z0-9_]+@[a-zA-Z]+\.[a-zA-Z]{2,4}$/;
	if(!filter.test(email))
	{
		alert('Please,provide proper email address');
		return false;
	}
	
	
	var mo=document.forms["myForm"]["mo"].value;
	var chkmobile=/^[0-9]{10}$/;
	if(!chkmobile.test(mo))
	{
		alert('please provide valid mobile number');
		return false;
	}
	if(mo=="" || mo==null)
	{
		alert('Please,Fill the Mobile Field');
		return false;
	}
	
}
</script>
</head>
<body>
	<form name="myForm"action="" method="post" onsubmit="return validate()">
    <table border="4" align="center">
    	<tr>
        	<td>UserName</td>
            <td><input type="text" name="unm" id="unm"/></td>
        </tr>
        <tr>
        	<td>Password</td>
            <td><input type="password" name="pass" id="pass"/></td>
        </tr>
        <tr>
        	<td> Confirm Password</td>
            <td><input type="password" name="cpass" id="cpass"/></td>
        </tr>
        <tr>
        	<td>Email</td>
            <td><input type="text" name="email" id="email"/></td>
        </tr>
        <tr>
        	<td>Mobile No.</td>
            <td><input type="text" name="mo" id="mo"/></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit"/></td>
        </tr>
    </table>
    </form>
</body>
</html>