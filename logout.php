<?php
ob_start();
session_start();
if(isset($_SESSION['user_name'])) {
	session_destroy();
	session_unset();
	session_destroy();
	header("Location: login.php");
} else {
	header("Location: login.php");
}
?>