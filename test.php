<?php
echo "<table border=1 width=300px cellpadding=5 cellspacing=3>";
$i=1;
$num=5;
while ($i <= 10) 
{
	echo "<tr><td> $num * $i =".$num*$i."</td></tr>";
	$i++;
}
echo "</table>";

//unset variables to release memory

unset($i, $num);
// echo "$num"; //undefine variable as already destroyed.
?>