<html>
<head>
<title>Test Document</title>
<script type="text/javascript">
function change()
{
var x = document.getElementById("name");
x.value = x.value.toUpperCase();

//document.getElementById("name").style.textTransform="uppercase";


}
</script>
</head>
<body>
Enter Your Name: <input type="text" id="name" onChange="change()">
</body>