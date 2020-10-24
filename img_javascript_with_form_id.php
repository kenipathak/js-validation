<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
// make function and by form id="" so var img=document.getElementById("img");
//also take value img.src="image.name"

function MouseOverimg()
{
var img=document.getElementById("img");
img.src = "pic_bulboff.gif";
}
function MouseOutimg()
{
	var img=document.getElementById("img");
	img.src = "pic_bulbon.gif";

}
</script>

</head>

<body>
<img src="pic_bulbon.gif" id="img" name="img" height="400px" width="400px" onclick="MouseOverimg()" onmouseout="MouseOutimg();"/>
</body>
</html>