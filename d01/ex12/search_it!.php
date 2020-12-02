#!/usr/bin/php
<?PHP
array_shift($argv);
if (empty($argv))
	return ;
$key = $argv[0];
array_shift($argv);
$i = 0;
$last = -1;
foreach ($argv as $str)
{
	$i++;
	if (strlen($str) < 3)
		continue ;
	$words = explode(":", $str);
	if (count($words) < 2)
		continue ;
	if (strlen($words[1]) < 1)
		continue ;
	if (0 === strcmp($key, $words[0]))
		$last = $i - 1;
}
if ($last != -1)
{
	$i =  strpos($argv[$last], ":");
	$i++;
	$res = substr($argv[$last], $i);
	print("$res\n");
}
?>
