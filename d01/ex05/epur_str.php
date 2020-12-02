#!/usr/bin/php
<?PHP
if ($argc != 2)
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
