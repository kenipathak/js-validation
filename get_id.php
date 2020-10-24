<!DOCTYPE html>
<html>
<head>
<script>
function display1()
{
	var img=document.getElementById('myImage');
	img.src='pic_bulbon.gif';
}
function display2()
{
	var img=document.getElementById('myImage');
	img.src='pic_bulboff.gif';
}
</script>
</head>
<body>


<button onclick="display1()">Turn on the light</button>

<img id="myImage" src="pic_bulboff.gif" style="width:100px" onMouseOver="display1()" onMouseOut="display2()">

<button onclick="display2()">Turn off the light</button>

</body>
</html>
