<!DOCTYPE html>
<html lang="en">
<html>
<head>	
	<?php echo view('includes/header');?>
	
</head>
<body>
	<div class="first_row">
<?php 
	$fName = $_REQUEST["firstname"];
	$oName = $_REQUEST["middlename"];
	echo "<h2>$fName Successfully Logged In!</h2>";
?>
<div class="forth_row">
	<a href="page"><button>Click to Continue</button></a>
	</div>
<?php echo view('includes/footer');?>
</body>
</html>