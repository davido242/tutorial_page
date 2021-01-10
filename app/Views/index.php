<!DOCTYPE html>
<html lang="en">
<html>
<head>	
	<?php echo view('includes/header');?>
	
</head>
<body>
	<div class="first_row">
		<h2>Web-Development Online Class!</h2>
		<h2 id="demo"></h2>
	</div>
	<div class="button_row">
		<a href="log_in"><button class="blink">Time for Another Class<i class="fa fa-caret-right"></i></button></a>
		<label id="lblGreetings"></label>
	</div>
	<div class="button_row bossy">
		<p>
			<h2>To be a developer, anywhere, you have to ‘spiral out’ some skills:</h2>
			<ul>
				<li>- A programming language, say Javascript or PHP</li>
				<li>- How to structure that code</li>
				<li>- How to test that code automatically</li>
				<li>- How to turn a problem description into code</li>
			</ul>
		<details>
		<summary>Read More..</summary>
		<h2>And then you spiral out toward users:</h2>
			<ul>
				<li>- How to create a User Interface</li>
				<li>- How to make a pleasing User Experience</li>
				<li>- How to code up that user interface</li>
				<li>- How to connect that up to your application</li>
			</ul>
		</details>
		<details>
		<summary>Read More..</summary>
		<h2>And usually, you’ll need to remember stuff:</h2>
			<ul>
				<li>- What a database is and what kinds are good for what things</li>
				<li>- How to run a database server</li>
				<li>- How to organise stored data</li>
				<li>- How to work with data in it, from inside your applicationa</li>
				
			</ul>
		</details>
		</p>
		<details>
		<summary>Read More..</summary>
		<h2>Then you need to get the app outside:</h2>
			<ul>
				<li>- How to deploy a web application</li>
			</ul>
		</details>

		<details>
		<summary>Read More..</summary>
		<h2>And you’ll need to talk to other programs:</h2>
			<ul>
				<li>- How to connect to a web service</li>
				<li>- How to create a web service on your own application</li>
				<li>- How to deploy a web service</li>
			</ul>
		</details>
		<details>
		<summary>Read More..</summary>
		<h2>You’ll want to know that everything is running ok:</h2>
			<ul>
				<li>- How to connect to a web service</li>
				<details>
					<summary>Finish Up:</summary>
					<ul>
`- How to monitor your applications
- How to alert on faults and errors
- 		How to isolate an error to its root cause

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

- Alan Mellor`
					</ul>
				</details>
			</ul>
		</details>

	</div>
	 
<?php echo view('includes/footer');?>
</body>
</html>