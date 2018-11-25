 <?php 
	if (isset($_POST['Operations'])) {
		$n1 = $_POST['first'];
		$n2 = $_POST['second'];
		if (empty($n1) && empty($n2)) {
			echo "Please enter 1st and 2nd number";				
		}
		elseif (empty($n1)) {
			echo "Please enter 1st number";
		}
		elseif (empty($n2)) {
			echo "Please enter 2nd number";
		}
		else{
			echo "The addition of $n1 and $n2 is ".($n1+$n2).".<br>";
			echo "The subtraction of $n1 and $n2 is ".($n1-$n2).".<br>";
			echo "The multiplication of $n1 and $n2 is ".($n1*$n2).".<br>";
			echo "The division of $n1 and $n2 is ".($n1/$n2).".<br>";
		}
	}
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Arithmetic operation</title>
 </head>
 <body>

 	<form name="calculation" method="POST">
 		<fieldset>
 			<legend>Arithmetic Operations of two numbers</legend>
 			<input type="number" name="first" placeholder="First Number" value= <?php if(isset($n1)) echo $n1; ?>><br/>
 			<input type="number" name="second" placeholder="Second Number" value=<?php if(isset($n2)) echo $n2; ?>><br/>
 			<input type="submit" name="Operations" value="Result">
 		</fieldset>
 		
 	</form>
 
 </body>
 </html>

