<html>
<head>
<title>Test Document</title>
<script type="text/javascript">
function dis_confirm()
{
	var ans = confirm("Are you Sure want to delete?")
		if(ans == true)
		{
		alert("Good");
		}
		else
		{
		alert("Bad");
		}
}

</script>
</head>
<body>
<form name="frm">
<input type="button" value="confirm" onClick="dis_confirm()">
</form>
</body>
</html>