<?php
if (isset($_POST['oddEvenCheck'])) { /*checks wehther the submission is emty and valied or not and skips php if the form is not submitted*/

$num = $_POST['oddeven'];
if ($num%2 == 0) {
	echo "$num is even";
} else {
	echo "$num is odd";
}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Input | Odd Even Program</title>
</head>
<body>
	<form method="POST" name="oddEven" action="">
		<fieldset>
			<legend>Odd Even Check</legend>
			<input type="number" name="oddeven">
			<input type="submit" name="oddEvenCheck" value="Result">
		</fieldset>
	</form>
</body>
</html>