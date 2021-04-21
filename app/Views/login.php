<!DOCTYPE html>
<html lang="en">
<html>
<head>	
	<?php echo view('includes/header');?>
	
</head>
<body>
	<label id="lblGreetings" style="display: none;"></label>
	<div class="first_row">
		<h2>Login to Take a Session!</h2>
	</div>
	<div class="first_row second_row">
		<P>Learn as if you were to live forever!</P>
		<form action="page" method="GET">
			<input type="text" name="firstname" placeholder="Your First Name.." required>
			<input type="text" name="middlename" placeholder="Your Middle Name.." required>
			<input type="password" name="pword" placeholder="Enter your password.."required>
			<input type="submit" value="Login">
		</form>
	</div>
	<?php
	// let wadupt = 10;

	// while(wadupt > 10){
	// 	echo "The shit is greater than 10 Mehn!";
	// }else{
	// echo "the shit aint upto 10 Mehn!";
	// }
	?>
	
	<?php echo view('includes/footer');?>
	<script type="text/javascript">
</script>
</body>
</html>