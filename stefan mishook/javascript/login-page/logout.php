<?php
session_start();
session_unset();
session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Logout</title>
	<link rel="stylesheet" href="stylesheet.css" type="text/css">
</head>
<body>

<nav>
	<ul>
		<li><a href="login.php">Home</a></li>
		<li><a href="protected-page.php">Protected Page</a></li>
		<li><a href="#">Shit</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
</nav>

<main>

	<p>You have been logged out.</p>

</main>

<script src="js.js"></script>

</body>
</html>
