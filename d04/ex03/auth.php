<?php
function auth($login, $passwd){
	echo "asd\n";
	$accounts = unserialize(file_get_contents('../private/passwd'));
	if (!$accounts[$login])
		return FALSE;
	$pwdhash = hash('whirlpool', $passwd);
	if ($accounts[$login] != $pwdhash)
		return FALSE;
	return TRUE;
}
?>
