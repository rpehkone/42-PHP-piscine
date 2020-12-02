#!/usr/bin/php
<?PHP
array_shift($argv);
if (empty($argv))
	return ;
$res = [];
foreach($argv as $current)
{
	$str = trim($current, " ");
	$words = preg_split('/\s+/', $str);
	$res = array_merge($res, $words);
}
sort($res);
foreach($res as $item)
	print("$item\n");
?>
