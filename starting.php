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
echo '<br>"$name" goes to school<br>'; // no escape in single quote

$today = "sunday<br>";
print_r($today);
$sport1 = "Volley";
$sport2 = "foot";
$plan1 = "I will play {$sport1}ball today<br>";
echo "$plan1";
echo "I am playing {$sport2}ball.<br>";
$myname = "Sarila ";
$myname.= "Ngakhusi ";
$myname .= "studies B.Sc. CSIT";
echo $myname."<br>";
echo "it has ".strlen($myname)." characters <br>";// can also use print("");
print("Location of 'k' is".strpos($myname, 'k')."<br>");
print("Location of 'G' is ".strpos($myname, 'G')."<br><br><br>")//strpos search the first occurance of string.
//strrev():reverse string
?>
<?php
$string1 = "Sarila Ngakhusi";
$string2 = "sarila ngakhusi";
$result = strcmp($string1, $string2);//if true then returns 0
$result1 = strcasecmp($string1, $string2);//doesnot compare the case
if ($result1 = 0) {
	echo "Strings are identical";
}
else{
	echo "strings are not identical<br/>";
}

$mystring = "Develop php is the best place for beginners to learn php.<br/>";
$mystring = wordwrap($mystring,24,"<br/>");
echo $mystring;
$mystring = "wrap long words hahahahahahahahhahhahahhahahhahahahahahahahahah";
//$mystring = wordwrap($mystring,24,"<br/>",true);
//echo $mystring."<br/>";
$var = trim($mystring,"h a s");
echo $var."<br/><br/>";
$a = "this is Sarila \n and i am learning php \n stydying in samriddhi college.";
$b = nl2br($a);
echo "$b<br/>";

$name1 = "My pet's name is Chunu.";
$name2 = addslashes($name1);
echo "$name2<br/>";
$name3 = stripslashes($name2);
echo "$name3<br/>";
$nam = "Sarila";
$sa = md5($nam);
echo "$sa<br/>";
$sa = sha1($nam);
echo "$sa";

?> 
<!-- 
<?php
$a = "In the year ";
$b = " the world will end";
$myfile = fopen("myfile.txt", "w");
$formatted = fprintf($myfile, "%s%04d%s",$a,date("Y"),$b);
echo "<br/>$formatted";

?> -->
</body>
</html>