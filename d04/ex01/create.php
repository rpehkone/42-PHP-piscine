<?php
	if ($_POST['submit'] != 'OK' || !$_POST['passwd'])
		goto error;
	if (!file_exists('../private'));
		mkdir('../private');
	if (file_exists('../private/passwd'));
		$accounts = unserialize(file_get_contents('../private/passwd'));
	if ($accounts[$_POST['login']])
		goto error;
	//if pwd ja login
	$pwd = hash('whirlpool', $_POST['passwd']);
	//array_push($accounts, $_POST['login']=>$pwd);
	$accounts[$_POST['login']] = $pwd;
	//if intput pw hash == stored hash
	file_put_contents('../private/passwd', serialize($accounts));
	return ;
	error:
	{
		echo "ERROR\n";
		return ;
	}
	//echo file_get_contents('index.html');
?>
