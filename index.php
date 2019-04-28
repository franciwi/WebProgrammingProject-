<?php


include "dbconfig.php";

$con  =mysqli_connect($server, $username, $dbpassword, $dbname)
	or die ("conection fail!");


# Execute the SQL query and return records
$query = "SELECT * FROM games.products ; ";

#echo "<br>query: $query\n";
$result = mysqli_query($con, $query);

# Fetch the data from the database, one row







?>


<!DOCTYPE html>
<html>
<head>
	<title>Index Page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="PageLayout.css">
	<script src="JS_Functions.js"></script>



</head>
<body>

	<!--Nav Bar---------------------------------------------------------------------------------->
	<header>

		<div class = "container">
			<img src="Logo.png" alt="logo" class="logo">


			<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="searchFunction.php">Search Products</a></li>
				<li><a href="addFunction.php">Add/Remove Products</a></li>
				<li><a href="login.html">Sign Out</a>
					<ul>

					</ul>
			</nav>
		</div>
	 <!--Nav Bar--------------------------------------------------------------------------------->



	 
	</header>

	
	
	<button onclick="toTop()" id="button" title="Go to top"></button>



	<h1>Welcome Gamer, Check out our Featered Titles  </h1>


	



	
	<div style=" padding:30px 30px 2500px">hello</div>




</body>
</html>