#!/usr/bin/php
<?PHP
	array_shift($argv);
	if (empty($argv))
		return ;
	$str = trim($argv[0], " ");
	$words = preg_split('/\s+/', $str);
	$i = 0;
	$len = count($words);
	foreach($words as $wrd)
	{
		print("$wrd");
		if ($i != $len - 1)
			print(" ");
		$i++;
	}
	print("\n");
?>
