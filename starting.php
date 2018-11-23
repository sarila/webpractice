<!DOCTYPE html>
<html>
<head>
	<title>embedding php and html</title>
</head>
<body>
<h1>
	The date and time is:
</h1>
<?php
date_default_timezone_set('Asia/Kathmandu');
echo date('Y/m/d h:i:s');

echo "<br><br>";

date_default_timezone_set('Asia/Shanghai');
echo date('Y/F/dS h:i:sA');

//difference between '' and " "

$name="ram" ;
echo "<br>\"$name\" goes to school<br>"; //escape sequence(\ and characters)
echo '"$name" goes to school'; // no escape in single quote
?>
</body>
</html>