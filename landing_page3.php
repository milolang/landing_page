<!DOCTYPE HTML> 
<html>
<head>
<meta charset="UTF-8">
<title>Landing Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
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
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-inline form" role="form">
	<div class="form-group">		
	   	<input type="text" name="firstName" class="form-control floatleft" placeholder="Enter First Name" required>	 			
	</div>
	   
	<div class="form-group"> 
	   	<input type="text" name="lastName" class="form-control floatleft" placeholder="Enter Last Name" required>   	
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



<?php
$servername = "dg1oa45d0u.database.windows.net";
$username = "thinkitdrinkitServer";
$password = "@Agave2013";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>



		
</body>
</html>