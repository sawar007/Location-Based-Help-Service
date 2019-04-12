<?php
require "header.php"
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
<title>Sign Up</title>
<link rel="stylesheet" href="css.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
</head>

<body>
	
<form class="box shadow p-3 mb-5 bg-white rounded" action="includes/signup.inc.php" method="post">
	<h1 class="text-primary">Sign Up</h1>
	<input type="text" name="uid" placeholder="Full Name" >
	<input type="Email" name="mail" placeholder="Email">
	<input type="password" name="pwd" placeholder="Password">
	<input type="password" name="pwd-repeat" placeholder="Confirm Password">
	<input type="text" name="phn" placeholder="Phone Number">
	<button class="btn btn-success" type="submit" name="signup-submit" value="Register">Sign up</button>
	<br>
	<a id="link3" href="login.php">Already have an account?</a>
</form>

</body>
</html>

<?php
require "footer.php"
?>



