<?php
if (isset($_POST['submit'])) {
	$to = $_POST['to'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	if (mail("aayushdhakal77@gmail.com","HEllO", "This is email sent by the local host"))
	{
		echo "Mail Send";
	}
	else{
		echo "Opps! error occured. Mailed not send";
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
</head>
<body>
	<form method="POST" name="Email" action="" enctype="multipart/form-data">
		To: <input type="email" name="to" placeholder="you@example.com">
		Subject:<input type="email" name="subject" placeholder="Subject of mail">
		Message:<textarea rows="5" cols="50" name="message" placeholder="Write your message here."></textarea>
		<br/>
		<input type="submit" name="submit" value="send">
	</form>
</body>
</html>