<!DOCTYPE html>
<html>
<head>
	<title>Testar</title>
	<script type="text/javascript">
		function showHideShipInfo() {
			if (document.getElementById('shipsame').checked==true) {
				document.getElementById('shipinfo').style.display='block';
			}else{
				document.getElementById('shipinfo').style.display='none';
			}
		}

	</script>
</head>
<body>

<form>
	<fieldset>
	<p>Nome: <input type="text" name="nome"></p>
	<p>Sexo: <input type="text" name="sexo"></p>
	</fieldset>
	<input type="checkbox" id="shipsame" name="shipsame" value="yes" onclick="showHideShipInfo()">
	
	<fieldset id="shipinfo" style="display: none;">

	<p>Nome: <input type="text" name="nome"></p>	

	</fieldset>
	

</form>

</body>
</html>