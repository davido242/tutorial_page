
<!DOCTYPE html>
<html lang="en">
<html>
<head>	
	<?php echo view('includes/header');?>
	
</head>
<body>
	<?php 
	$fName = $_REQUEST["firstname"];
	$oName = $_REQUEST["middlename"];
	?>
	<div class="first_row vintage">
		<?php 
		  echo "<h2>Welcome $fName</h2>";
		?>
		<i class="fa fa-user-circle-o"></i>
	</div>
	<div class="third_row">
		<h3>Profile</h3>
		<i class="fa fa-user-circle-o"></i>
		<?php 
			echo "<p>Name: $fName $oName</p>";
			echo "Date: ";
			echo date("Y");
			echo "<p>date(Y)</p>"
		?>
	</div>
	<div class="first_row">
		<p>Programming languages:</p>
	</div>
	<div class="forth_row">
	<a href="home"><button>Log Out</button></a>
	</div>
<?php echo view('includes/footer');?>
</body>
</html>