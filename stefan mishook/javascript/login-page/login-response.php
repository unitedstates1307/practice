<?php

session_start();

$userName = $_POST['userName'];

if(trim($userName) == 'root') {

	$_SESSION['isLoggedIn'] = true;
	header('Location: protected-page.php');

} else {
	header('Location login.php?badUserCredentials=true');

}

?>
