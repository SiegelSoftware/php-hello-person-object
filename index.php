<?php
	require_once("person.class.php");

	if ($_REQUEST['first_name'] != '')
	{
		# We first create a new 'Person' object
		$person = new Person($_REQUEST['first_name'], $_REQUEST['last_name']);

		# Next we access the objects toString method and set the name variable
		$name = $person->toString();

		# Finally we set the output to say hello to our person.
		$html_output = "Hello $name";
	}
	else
	{
		$html_output = <<<EOT
		<form method="POST">
			<p>Please enter your information:</p>
			First Name: <input name="first_name" placeholder="What's your first name?" /><br />
			Last Name: <input name="last_name" placeholder="What's your last name?" /><br />
			<input type="submit" value="Go" />
		</form>
EOT;
	}

?>
<!doctype html>
<head>
<title>Example Page</title>
<style>
body {background-color: #006;}
div {
	background-color: #FFF; 
	width: 300px;
	padding: 10px;
}
</style>
</head>
<body>
	<div style="margin:4em auto 0px auto">
<?php
	echo $html_output;
?>
	</div>
</body>
</html>