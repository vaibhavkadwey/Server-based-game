<?php

 session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>SERVER GAME FORM</title>
</head>
<body>
	<form action="login.php" method="POST">
		<input type="text" name="uidl" placeholder="User Name" size="10"><br>
		<input type="password" name="pwdl" placeholder="Password" size="8"><br>
		<button type="submit"> LOG IN </button>
	</form>

	<?php
	if(isset($_SESSION['id'])){
		echo "HI";
	}
	else{
		echo "You are NOT Loged in";
	}

	?>

	<br><br><br>

	<form action="signup.php" method="POST">
		<input type="text" name="first" placeholder="First Name" size="15"> <br>
		<input type="text" name="last" placeholder="Last Name" size="15"><br>
		<input type="text" name="uid" placeholder="User Name" size="10"><br>
		<input type="password" name="pwd" placeholder="Password" size="8"><br>
		<button type="submit">SIGN UP</button>
	</form>


	<br><br><br>

	<form action="logout.php">
		<button>LOGOUT</button>
	</form>

</body>
</html>