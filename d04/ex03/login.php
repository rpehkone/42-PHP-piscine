<?php
	include "auth.php";
	session_start();
	if (auth($_GET['login'], $_GET['passwd']))
	{
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['loggued_on_user'] = $_GET['login'];
		$_SESSION['passwd'] = $_GET['passwd'];
		echo "OK\n";
	}
	else
		echo "ERROR\n";
?>
