#!/usr/bin/php
<?PHP
while (42)
{
	print("Enter a number: ");
	$num = fgets(STDIN);
	$num = trim($num);
	if (feof(STDIN))
	{
		print("\n");
		return;
	}
	if (is_numeric($num))
	{
		if ($num % 2)
			print("The number $num is odd\n");
		else
			print("The number $num is even\n");
	}
	else
		print("'$num' is not a number\n");
}
?>
