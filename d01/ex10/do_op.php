#!/usr/bin/php
<?PHP
if ($argc != 4)
{
	print("Incorrect Parameters\n");
	return ;
}
array_shift($argv);
$argv[0] = trim($argv[0], " ");
$argv[1] = trim($argv[1], " ");
$argv[2] = trim($argv[2], " ");
if ($argv[1][0] == '+')
	$res = $argv[0] + $argv[2];
else if ($argv[1][0] == '-')
	$res = $argv[0] = $argv[2];
else if ($argv[1][0] == '*')
	$res = $argv[0] * $argv[2];
else if ($argv[1][0] == '/') 
	$res = $argv[0] / $argv[2];
else if ($argv[1][0] == '%') 
	$res = $argv[0] % $argv[2];
else
{
	print("Incorrect Parameters\n");
	return ;
}
print("$res\n");
?>
