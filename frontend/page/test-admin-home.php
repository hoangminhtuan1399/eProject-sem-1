<?php
session_start();


if(!isset($_SESSION["username"]))
{
	header("location:test-login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>THIS IS ADMIN HOME PAGE</h1><?php echo $_SESSION["username"] ?>

<a href="test-logout.php">Logout</a>
</body>
</html>
