<?php

	error_reporting(0);
	$name=$_GET['name']; 
	$genre=$_GET['genre'];
	$rating=$_GET['rating'];
	$price=$_GET['price'];




	$review=$_GET['review'];


	$name_err = ""; 
	$genre_err = "";
	$rating_err = "";
	$price_err = "";



	$review_err = "";




	include "dbconfig.php";
	$link = new mysqli($server, $username, $dbpassword, $dbname) 
	or die("Could not connect to the Database " .mysqli_error());

	if(empty($_GET["name"])){ 
		
        $name_err = 'Product name is invalid'; 
    } 
	
	else{
		
        $name = ($_GET["name"]); 
    }
	
	
	if(empty($_GET["genre"])){ 
		
        $genre_err = 'Product genre is invalid';
    } 
	
	else{
		
        $genre = ($_GET["genre"]); 
    }
	
	if(empty($_GET["rating"])){ 
		
        $rating_err = 'Rating is invalid'; 
    } 
	
	else{
		
        $rating = ($_GET["rating"]); 
    }
	
	if($_GET["price"]<0){ 
		
        $price_err = 'Price is invalid'; 
    } 

    
	
	else{
		
        $price = ($_GET["price"]); 
    }






    if($_GET["review"]<0){ 
		
        $price_err = 'review is invalid'; 
    } 



	
	if(!empty($review) ){ 
	
		$link = new mysqli($server, $username, $dbpassword, $dbname) 
		or die("Could not connect to the Database " .mysqli_error());
	
		$query_main="select * from games.products where name='$name'";; 




		$err=mysqli_query($link, $query_main);
		if(mysqli_num_rows($err)>0) {	
		
			$name_err="Product name already taken.";
		
		}
	
		else{


		$query3 = " UPDATE games.products SET review = '$review' WHERE title = '$name' " ; 


		 
			$query= "insert into games.products (title, genre, rating, price)
			values ('$name', '$genre', '$rating', '$price')";



		
			$results=mysqli_query($link, $query3);
			header ("location: index.php");
			exit();








		}
	}

?>





<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Review</title>
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
<div>	
<h1>Add Products</h1>

<br>
	
	</form>
	
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">


 	<div <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>>
    <label>Product Name:</label>

   


     <select name="name">
      <option value="Zombies">Zombies</option>
	  <option value="ModerWarfare">ModerWarfare</option>
	  <option value="SpongeCubeAdveture">SpongeCubeAdveture</option>
	  <option value="SpaceFightOnline">SpaceFightOnline</option>
	  <option value="FarmerTown">FarmerTown</option>

	 
	</select>



    <span > <?php echo $name_err; ?></span>
    </div>   
	






    <div <?php echo (!empty($review_err)) ? 'has-error' : ''; ?>>
    <label>Product Review:</label>

    

    <div class="slidecontainer">



  <input type="range" name="review"  min="0" max="100" value="50" class="slider" id="myRange">
  
</div>



    <span > <?php echo $review_err; ?></span>
    </div> 


	



   
	
    <div>
    <input type="submit" value="Submit">
    </div>
        
	</form>
	</div>



</body>
</html>
 

