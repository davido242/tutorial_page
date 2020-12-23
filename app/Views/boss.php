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


To be a developer, anywhere, you have to ‘spiral out’ some skills:




	- How to monitor your applications
	- How to alert on faults and errors
	- How to isolate an error to its root cause

	You’ll need error fixing skills:

	- How to debug code by bisecting errors
	- How to read logs output
	- How to set up test environments to recreate errors

	You’ll need some help:

	- Social skills to work in a team
	- Clean coding skills to allow team mates to change your code

	You’ll want your code safe:

	- How to use Version control systems
	- Versioning strategies
	- Safe upgrade strategies

	You’ll most likely want it on the web:

	- How the web works
	- How to make web user interfaces
	- How to talk to other applications across the web
	- Web security to keep out attackers
	- How to handle network failures

	The programming language part is definitely the first place to start. But you’ll end up doing all those other things because that’s what makes up a whole application.

	It’s a lot to learn - but take it step by step, learn each day, apply everything you learn and work towards building a medium-sized application on your own.

	- Alan Mellor