<!DOCTYPE html>
<html>
	<head>
		<title>Read CSV</title>
	</head>
	<body>
	<?php
		$fp = fopen('name.csv', 'r');
		while (!feof($fp))
		{
			$line = fgetcsv($fp);
			$x =0;
			while ($x < 3) 
				{
				print $line[$x];
				print " ";
				$x++;
				}
			print "<br/>";
		}
	?>	
	</body>
</html>
