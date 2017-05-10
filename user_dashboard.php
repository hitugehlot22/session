<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
</head>
<body>



<?php
if(!$_SESSION["username"]){
	header('Location: user_login_session.php');
}
if($_SESSION["username"]) {
?>
<?php echo $_SESSION["username"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.</a>
<?php
}
?>
click to next page<a href="second.php">secone page</a>



</body>
</html>