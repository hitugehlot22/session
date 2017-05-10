<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["pass"]);
header("Location:user_login_session.php");
?>