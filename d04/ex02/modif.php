<?php
	echo "0\n";
	if ($_POST['submit'] != 'OK' || !$_POST['oldpw'])
		goto error;
	$accounts = unserialize(file_get_contents('../private/passwd'));
	echo "1\n";
	if (!$accounts[$_POST['login']])
		goto error;
	echo "2\n";
	//if (!$accounts[$_POST['login']])
	$oldpwd = hash('whirlpool', $_POST['oldpw']);
	$newpwd = hash('whirlpool', $_POST['newpw']);
	if ($accounts[$_POST['login']] != $oldpwd)
		goto error;
	echo "3\n";
	$accounts[$_POST['login']] = $newpwd;
	//array_push($accounts, $_POST['login']=>$pwd);
	//if intput pw hash == stored hash
	file_put_contents('../private/passwd', serialize($accounts));
	return ;
	error:
	echo "ERROR\n";
	//echo file_get_contents('index.html');
?>
