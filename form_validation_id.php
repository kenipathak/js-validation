<html>
<head>
<script type="text/javascript" src="val.js"></script>
</head>
<body>

<form name="form1" onSubmit="return reg_form(this)"  method="post" enctype="multipart/form-data">

<table align="center" cellpadding="5px" cellspacing="0px" border="1px">
<tr>
<td colspan="2" align="center">Registration Form</td>
</tr>

<tr>
<td><span style="color:#FF0000">*</span> User Name </td>
<td><input type="text" name="uname" id="uname" /></td>
</tr>

<tr>
<td><span style="color:#FF0000">*</span> Password </td>
<td><input type="password" name="pass" id="pass" /></td>
</tr>

<tr>
<td><span style="color:#FF0000">*</span> Email </td>
<td><input type="text" name="email" id="email" /></td>
</tr>

<tr>
<td><span style="color:#FF0000">*</span> Photo </td>
<td><input type="file" name="photo" id="photo" onChange="return check(this)"/></td>
</tr>

<tr>
<td><span style="color:#FF0000">*</span> Resume </td>
<td><input type="file" name="resume" id="resume" onChange="return check1(this)" 
/></td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" id="submit" />
<a href="login.php"><input type="button" name="cancel" value="Cancel" id="cancel" /></a>
</td>
</tr>

</table>
</form>

<h4 align="center"><span id="msg1" style="color:#FF0000; text-transform:capitalize"></span></h4>
</body>
</html>