<?php 
session_start();

if(isset($_SESSION['isLoggedIn'])) {

} else {

	header('Location: login.php?isBlock=true');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Protected Page</title>
	<link rel="stylesheet" href="stylesheet-.css" type="text/css">
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
	<p>Protected Page.</p>
</main>

</body>
</html>
