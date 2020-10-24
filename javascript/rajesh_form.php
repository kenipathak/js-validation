<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
	function validate()
	{
			var unm=document.forms["myform"]["unm"].value;
			if(unm=="" || unm==null)
			{
				alert('Please fill out the Username');
				return false;
			}
			var pass=document.forms["myform"]["pass"].value;
			if(pass=="" || pass==null)
			{
				alert('Please fill out the Password');
				return false;
			}
			var cpass=document.forms["myform"]["cpass"].value;
			if(cpass=="" || cpass==null)
			{
				alert('Please fill out the Confirm Password');
				return false;
			}
			
			if(pass==cpass)
			{
			}else
			{
				alert('Password Do not Match');
				return false;
			}
			var email=document.forms["myform"]["email"].value;
			if(email=="" || email==null)
			{
				alert('Please fill out the Email Address');
				return false;
			}
		var filter=/^[a-zA-Z0-9_]+@[a-zA-Z]+\.[a-zA-Z]{2,4}$/;
		if(!filter.test(email))
		{
			alert('Please,provide proper email address');
			return false;
		}
			var mo=document.forms["myform"]["pno"].value;
			if(mo=="" || mo==null)
			{
				alert('Please fill out the Mobile Number');
				return false;
			}
			var chk=/^[0-9]{10}$/;
			if(!chk.test(mo))
			{
				alert('please enter valid mobile number');
				return false;
			}
	}
</script>
</head>

<body>

    	<form name="myform" action="" method="" onsubmit="return validate()">
			<table border="2" align="center">
            	<tr>
                	<th> Registration Page </th>
                </tr>
                <tr>
            		<th>User Name:-</th>
                    <td><input type="text" name="unm" ></td>
                </tr>
                <tr>
            		<th>Password:-</th>
                    <td><input type="password" name="pass" ></td>
                </tr>
              <tr>
            		<th>Confirm Password:-</th>
                    <td><input type="password" name="cpass" ></td>
                </tr>
                <tr>
            		<th>Email Address:-</th>
                    <td><input type="text" name="email" ></td>
                </tr>
                <tr>
            		<th>Phone No:-</th>
                    <td><input type="text" name="pno" ></td>
                </tr>
                <tr>
                	<td><input type="submit" name="submit"/></td>
                    
                </tr>
                 	
            	
            </table>
                
        </form>
</body>
</html>