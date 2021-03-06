<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>

<body>

	<?php
	// require_once('phar:///var/www/path-to/PhpConsole.phar'); // autoload will be initialized automatically
	// PhpConsole\Connector::getInstance()->setServerEncoding('cp1251');
	// PhpConsole\Helper::register();
	// PC::debug('Debug using new methods');
	$firstName = $lastName = $email = $website = "";
	
	if ([ 
			"REQUEST_METHOD" 
	] == "POST") {
		$firstName = test_input ( $_POST ["firstName"] );
		$lastName = test_input ( $_POST ["lastName"] );
		$email = test_input ( $_POST ["email"] );
		$website = test_input ( $_POST ["website"] );
	}
	function test_input($data) {
		$data = trim ( $data );
		$data = stripslashes ( $data );
		$data = htmlspecialchars ( $data );
		return $data;
	}
	
	?>

<script>
    console.log(<? echo json_encode($firstName); ?>);
</script>

	<h2>Request for The Son-Rise Program packet</h2>

	<form method="post"
		action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
		class="form-inline" role="form">
			<p>
				<input type="text" class="form-control" name="firstName"
					id="firstName" placeholder="First Name required">
			</p>

			<p>
				<input type="text" name="lastName" class="form-control"
					id="lastName" name="lastName" placeholder="Last Name required">
			</p>
			<p>
				<input type="email" name="email" class="form-control" id="email"
					name="email" placeholder="E-mail required">
			</p>
			<p>
				<input type="submit" name="submit" value="Submit">
			</p>

	</form>

<?php
echo "<h2>Your Input:</h2>";
echo $firstName;
echo "<br>";
echo $lastName;
echo "<br>";
echo $email;
echo "<br>";
echo $website;

?>

	<!--
		<form action="sonrise.php" method="post" class="form-inline" role="form" > 
			
			  <div class="form-group">
			    <label for="email">Email address:</label>
			    <input type="email" class="form-control" id="email">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Password:</label>
			    <input type="password" class="form-control" id="pwd">
			  </div>

			  <button type="submit" class="btn btn-default">Submit</button>
			
		</form>
	-->

</body>

</html>