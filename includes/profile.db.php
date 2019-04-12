



<?php
if(isset($_POST['submit']))
{
	require 'dbh.inc.php';
	$name = $_POST['Name'];
	$phone = $_POST['phone'];
	$sad = $_POST['ad1'];
	$sad1 = $_POST['ad2'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];

	print $name;

	
		
		

}

 ?>

 <html>
 <body>


<?php print $name; ?>

 </body>
 </html>