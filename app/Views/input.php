<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>Input alert Page</title>	
	<?php echo view('includes/header');?>
	
</head>
<body>
	<div class="first_row">
		<h2>Login to Take a Session!</h2>
		<input type="number" id="x" />
		<input type="number" id="y" />
		<input type="submit" name="Submit" onclick="ourFuntion()">
	</div>


<script type="text/javascript">
var x = document.getElementById('x').value;
var y = document.getElementById('y').value;
var z = x + y;
	function ourFuntion(){
		alert(z)
	};

//alert(z);
</script>