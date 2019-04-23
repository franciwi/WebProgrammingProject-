<?php
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Index Page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="PageLayout.css">
	<script src="JS_Functions.js"></script>
</head>
<body>
<header>

	<div class = "container">
		<img src="Logo.png" alt="logo" class="logo">


		<nav>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="searchFunction.php">Search Products</a></li>
			<li><a href="addFunction.php">Add/Remove Products</a></li>
			<li><a href="login.html">Sign Out</a>
				<ul>

				</ul>
		</nav>
	</div>

	</header>
	
	<button onclick="toTop()" id="button" style="background: url(logo2.png)" title="Go to top">Top</button>

<br>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
	
	<div <?php echo (!empty($keyword_err)) ? 'has-error' : ''; ?>>
    <label>Keyword:</label>
    <input type="text" name="keyword" value="<?php echo $keyword; ?>" 
    <span> <?php echo $keyword_err; ?></span>
    </div> 

	<div>
    <input type="submit" value="Search products">
    </div>
	
	</form>
</body>
</html>

<?php

	error_reporting(0);
	$keyword=$_GET['keyword'];
	$keyword_err = "";

	include "dbconfig.php";
	$link = new mysqli($server, $username, $dbpassword, $dbname) 
	or die("Could not connect to the Database " .mysqli_error());
	
	if(empty($_GET["keyword"])){ 
		
        $keyword_err = 'keyword field is empty'; 
    } 
	
	else{
		
        $keyword = ($_GET["keyword"]); 
    }
	$query_main = "SELECT title, genre, rating, price from games.products g where g.title like '%$keyword%'";
	$query_secondary = "SELECT title, genre, rating, price from games.products";
	$result_main = $link->query($query_main);
	$result_secondary = $link->query($query_secondary);
	
	if (strcmp("*","$keyword")==0){
		echo "<table> <tr> <th>Game Title</th> <th>Game Genre</th> <th>Game Rating</th> <th>Game Price</th> </tr>";
    
		while($row_secondary = $result_secondary->fetch_assoc()) {
			
			echo "<tr><td>" . $row_secondary["title"]. "</td> <td>" .$row_secondary["genre"]. "</td> 
			<td>" . $row_secondary["rating"]. "</td> <td>" . $row_secondary["price"]. "</td> </tr>";
		
		}
		
		echo "</table>";
	
	} 

	elseif ($result_main->num_rows > 0) {
		
		echo "<table> <tr> <th>Game Title</th> <th>Game Genre</th> <th>Game Rating</th> <th>Game Price</th> </tr>";
    
		while($row_main = $result_main->fetch_assoc()) {
			
			echo "<tr><td>" . $row_main["title"]. "</td> <td>" .$row_main["genre"]. "</td> 
			<td>" . $row_main["rating"]. "</td> <td>" . $row_main["price"]. "</td> </tr>";
		
		}
		
		echo "</table>";
	
	} 
	
	else {
		
		echo "No results found with the keyword $keyword";
	
	}

	$link->close();
	?>
	
	
	
	