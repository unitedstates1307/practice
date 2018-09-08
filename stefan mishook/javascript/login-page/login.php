<?php
//SESSION START
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOG IN PAGE</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

<nav>
	<ul>
		<li><a href="login.php">Login</a></li>
		<li><a href="protected-page.php">Protected Page</a></li>
		<li><a href="#">Contact?</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
</nav>

<main>

<?php

if(isset($_SESSION['isLoggedIn'])){
	
	echo "<p>You are already logged in.</p>";

} else {

$theForm = <<<THEFORM

	<p>welcome</p>
	<h2>Enter username/pw</h2>

	<form action='login-response.php' method='post'>
		<input type='text' name='userName' id='username'>
		<input type='password' name='password'>
		<input type='submit'>
	</form>

THEFORM;
echo $theForm;

}
?>

<?php

$isBlock = $_GET['isBlock'];
$badUserCredentials = $_GET['badUserCredentials'];

if(isset($isBLock)) {

	echo "<h2>Log in.</h2>";
	echo "<script>document.getElementById('username').focus();</script>";

}else if (isset($badUserCredentials)) {
	
	echo "<h2>Incorrect credentials.</h2>";
	echo"<script>document.getElementById('username').focus();</script>";

}
else {}
?>

</main>
<script src="js.js"></script>
</body>
</html>
