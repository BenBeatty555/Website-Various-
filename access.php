<!DOCTYPE html>
<html><head>
<link href="stylesheet.css" rel="stylesheet" type="text/css">
<body>

<?php
	session_start();
	$user = $_POST["username"];
	$pass = $_POST["password"];

	
	if($pass=='p' and $user=="u"){
		$_SESSION['access'] = true;
		$access = "Granted";
	}else{
		$_SESSION['access'] = false;
		$access = "Denied";
	}
	
	
	echo "<title>Access $access</title>";
	
		
	if($_SESSION['access']){
		echo "<pright>$user</pright>
			<h1>Access $access</h1>
			<p>Hello $user</p>";
	}else{
		echo "<h1>Access $access</h1>
			<form method='post' action='index.php'>
			<p><input type='submit' value='Try Again' class='accessbutton1'></p>";
	}

?>
	

</body>
</head>
</html>