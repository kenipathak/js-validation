<html>
<head>
<title>Test Document</title>
<script type="text/javascript">
function dis_prm()
{
var p = prompt("Please enter your name:","Your name")
document.getElementById("msg").innerHTML="Hello " + p;
}
</script>
</head>
<body>
<form name="frm" >
<input type="button" value="Prompt" onClick="dis_prm()">
<br>
<div id="msg"></div>
</form>
</body>
</html>