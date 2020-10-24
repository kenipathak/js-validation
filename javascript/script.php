<html>
<head>
<title>Test Document</title>
<script type="text/javascript">
function MouseOverimg()
{
	var img=document.getElementById("img");
	img.src = "2.jpg";
}
function MouseOutimg()
{
	var img=document.getElementById("img");
	img.src = "1.jpg";
}
</script>
</head>
<body>
<img src="1.jpg" id="img" name="img" height="200px" 
width="200px" onMouseOver="MouseOverimg();" onMouseOut="MouseOutimg();" />
</body>
</html>