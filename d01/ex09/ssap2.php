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
	if (($item[0] >= 'a' && $item[0] <= 'z') || ($item[0] >= 'A' && $item[0] <= 'Z'))
		print("$item\n");
foreach($res as $item)
	if ($item[0] >= '0' && $item[0] <= '9')
		print("$item\n");
foreach($res as $item)
{
	if (!(($item[0] >= 'a' && $item[0] <= 'z') || ($item[0] >= 'A' && $item[0] <= 'Z')) && !($item[0] >= '0' && $item[0] <= '9'))
		print("$item\n");
}
?>
