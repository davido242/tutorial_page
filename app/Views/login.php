<!DOCTYPE html>
<html lang="en">
<html>
<head>	
	<?php echo view('includes/header');?>
	
</head>
<body>
	<div class="first_row">
		<h2>Login to Take a Session!</h2>
	</div>
	<div class="first_row second_row">
		<form action="page" method="GET">
			<input type="text" name="firstname" placeholder="Your First Name.." required>
			<input type="text" name="middlename" placeholder="Your Middle Name.." required>
			<input type="password" name="pword" placeholder="Enter your password.."required>
			<input type="submit" value="Login">
		</form>
	</div>
	
<?php echo view('includes/footer');?>
</body>
</html>