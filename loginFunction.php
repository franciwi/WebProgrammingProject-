<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>



<body>



<?php
include "dbconfig.php";
$con=mysqli_connect($server, $username, $dbpassword, $dbname)
	or die ("conection fail!");


# Execute the SQL query and return records
$query = "SELECT * FROM CPS3740.Users ; ";

#echo "<br>query: $query\n";
$result = mysqli_query($con, $query);

# Fetch the data from the database, one row
;

while($row = mysqli_fetch_array($result))
{	

	#echo "fname:" . $row['fname'] . "\n";
	#echo "lname:" . $row['lname'] . "\n";
	#Authentication
			if(strtolower($_POST['username']) == $row['login'] && $_POST['password'] == $row['password'] )
			{


				header("location: index.html");

			}

}

# free result set
mysqli_free_result($result);



# Close a Connection
mysqli_close($con);
?>

</body>

</html>>
