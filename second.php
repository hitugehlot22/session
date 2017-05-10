<html>
<head>
<?php
session_start();
?>
<?php
if(!$_SESSION["username"]){
	header('Location: user_login_session.php');
}
if($_SESSION["username"]) {
?>
<?php echo $_SESSION["username"]; ?>

<?php
}
?>
</head>
<body>

hello this is your second page.click to <a href="logout.php">logout</a>
</body>
<head>