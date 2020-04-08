<!doctype html>
<html>
<head>
<link href="stylesheet.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Base Converter</title>
</head>

<body>
<h1>Base Converter</h1>
	
<p>
<form method="POST" action="baseconverter.php">
	<p><input placeholder="Number" type="text" name="number1"></p>
	<p><input placeholder="Convert To Base" type="text" name="base1"></p>
	<p><input placeholder="Convert From Base" type="text" value="10" name="base2"></p>
	<p><input type="submit" value='Convert' class='indexbutton1'></p>
</form>
</p>

<p id="reload">
	<?php include('return.php'); ?>

</p>

</body>
</html>