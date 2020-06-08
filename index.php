<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function changeDropdown() {
		 	var state=document.getElementById('myselect').value;
		 	if (state=="AP") {
		 		document.getElementById("uname").style.display='none';
		 	}else{
		 		document.getElementById("uname").style.display='block';
		 	}
		 }
	</script>
</head>
<body>

<form>
	<div>
	<p>Nome: <input type="text" name="nome"></p>
	<p>mostrar: <select  id="myselect" onchange="changeDropdown(this.value);">
		<option>select receipt</option>
		<option value="TG">mostrar</option>
		<option value="AP">ocultar</option>
	</select></p>


	</div>
	
	<div id="uname" style="display: none;">

	<p>Nome: <input type="text" name="nome"></p>	

	</div>
	

</form>

</body>
</html>