<?php
	session_start();
	if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
   		
	}else{
		header("Location:../index.html");
		exit;
	}
?>

<html>
<head>
<style>

.button{
	position: absolute;
	left: calc(50% - 175px);
	top: 100px;
	
}
body {
	background-image: url("https://images4.alphacoders.com/294/29486.jpg");
}

</style>
</head>

<body>
	
	
	<p style="position: absolute; left: calc(50% - 235px); font-size: 30px; background-color: white;"><strong>The Old Password Entered Does Not Match Our Records</strong></p>
	
<div class="button">	
	<form action='changePasswordPage.php'>
		<input type='submit' value="Click Here to Return to the Change Password Page">
	</form>
</div>
</body>
</html>