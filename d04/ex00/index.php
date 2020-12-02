<?php
	session_start();
	if ($_GET['submit'] == 'OK')
	{
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['passwd'] = $_GET['passwd'];
	}
		//setcookie('login', $_GET['login'], time() + 86400 * 30);
		//setcookie('passwd', $_GET['passwd'], time() + 86400 * 30);
		//<form id="<?php echo $usr
?>
<html><body>
<form method="get">
	Username: <input name="login" value="<?php if ($_SESSION['login']){echo $_SESSION['login'];} ?>">
	<br />
	Password: <input name="passwd" value="<?php if ($_SESSION['passwd']){echo $_SESSION['passwd'];} ?>">
	<input type="submit" name="submit" value="OK" />
</form>
</body></html>
