<html>
<head>
<script>
//  now make function and call them by ON event BY BUTTON 
function show1()
{
	//document.write("Hi how are you"); print
	alert('this is alert event');  // event 
}


function show2()
{
	var ans=confirm('this is alert event');  // event
	if(ans==true)
	{
		alert('delete success');
	}
	else
	{
		alert('delete not success');
	} 
}

function show3()
{
	var ans=prompt('Enter your pass ','');  // event
	if(ans=="nagar")
	{
		alert("success")	;
	}
	else
	{
		alert("not success")	;	
	}
}


</script>


</head>
<body>
<button onClick="show1()"> Click Me </button></br>
<button onDblClick="show2()"> Double Click Me </button></br>
<button onMouseOut="show3()"> Mouse out </button></br>
<button onMouseOver="show3()"> Mouse Over </button></br>
<button onMouseDown="show1()"> Mouse Down </button></br>
<button onBlur="show1()"> Click Me </button></br>
<button onFocus="show1()"> Click Me </button></br>
<button onDblClick="show2()"> Click Me </button></br>
<button onKeyDown="show2()"> Click Me </button></br>
<button onKeyPress="show2()"> Click Me </button></br>
<button onKeyUp="show2()"> Click Me </button></br>
<button onMouseDown="show3()"> Click Me </button></br>
<button onMouseMove="show3()"> Click Me </button></br>

<button onMouseUp="show3()"> Click Me </button>

</body>
</html>