<!DOCTYPE HTML> 
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
// define variables and set to empty values
$firstName = $lastName = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $firstName = test_input($_POST["firstName"]);
   $lastName = test_input($_POST["lastName"]);
   
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>Request for The Son-Rise Program packet</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-inline" role="form">
	<div class="form-group">
		<label>First Name</label> 
	   	<input type="text" name="firstName" class="form-control" placeholder="Enter First Name" required>	   	
	</div>
	   
	<div class="form-group">
		<label>Last Name</label> 
	   	<input type="text" name="lastName" class="form-control" placeholder="Enter Last Name" required>	   	
	</div> 
   <button type="submit" name="submit" class="btn btn-default">Submit</button> 	
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $firstName;
echo "<br>";
echo $lastName;
echo "<br>";

?>

</body>
</html>