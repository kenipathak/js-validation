<html>
<head>
<title>Test Document</title>
<script type="text/javascript">
function set()
{
document.getElementById("name").style.textTransform="uppercase";

document.getElementById("col").style.color="red";

   
} 
</script>
</head>
<body>
Enter Your Name: <input type="text" id="name" onFocus="set()">


<p id="col">Rajesh Nagar</p>

</body>