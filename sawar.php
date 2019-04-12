<?php include 'includes/dbh.inc.php'; ?>

<div>
	


<?php

$query = "select * from users";
$query_bool =mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($query_bool))
{


?>
Name:
<h1> <?php  print $row['uidusers'];  ?> </h1>
Email:
<p>  <?php  print $row['emial'];  ?>  </p>

<hr>

<?php  }  ?>

</div>