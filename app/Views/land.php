
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
		<div class="time_spec">
			<?php
				date_default_timezone_set('Africa/Lagos');

				// 24-hour format of an hour without leading zeros (0 through 23)
				$Hour = date('G');

				if ( $Hour >= 5 && $Hour <= 11 ) {
				echo "SESSION: Morning";
				} else if ( $Hour >= 12 && $Hour <= 18 ) {
				echo "SESSION: Afternoon";
				} else if ( $Hour >= 19 || $Hour <= 4 ) {
				echo "<b>SESSION:</b>  Evening ";
				}
			?>
		</div>
		<?php 
		  echo "<h2>Welcome $fName</h2>";
		?>
		<i class="fa fa-user-circle-o"></i>
	</div>
	<div class="third_row">
		<h3>Profile</h3>
		<i class="fa fa-user-circle-o"></i>
		<?php 
			date_default_timezone_set("Africa/Lagos");
			echo "<p>Name: $fName $oName</p>";
			echo "Date: ";
			echo date("Y") . '<br />';
			echo "Day: ";
			echo date("l")
		?>
		<p>Time:</p>
		<p id="demon"></p>
	</div>
	<div class="first_row vintage">
		<p>Programming languages:</p>
		<ul style="list-style: none;">
			<li>HTML</li>
			<li>CSS</li>
			<li>Java Script</li>
			<li>PHP</li>
		</ul>
	</div>
	<div class="forth_row">
	<a href="home"><button>Log Out</button></a>
	</div>
<?php echo view('includes/footer');?>
</body>
</html>