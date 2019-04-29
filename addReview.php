<?php

	error_reporting(0);
	$name=$_GET['name']; 
	$review=$_GET['review'];


	$name_err = ""; 
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
	






    if($_GET["review"]<0){ 
		
        $price_err = 'review is invalid'; 
    } 

    else{
		
        $review = ($_GET["review"]); 
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


		     $query = " UPDATE games.products SET review = '$review' WHERE title = '$name' " ; 


			 $results=mysqli_query($link, $query);
			 header ("location: index_Gamer.php");
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
			<li><a href="index_Gamer.php">Home</a></li>
			
			<li><a href="login.html">Sign Out</a>
				<ul>

				</ul>
		</nav>
	</div>

	</header>
	
	<button onclick="toTop()" id="button" title="Go to top"></button>
<div>	
<h1>Review Games</h1>


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
	   <option value="GrandLacerny7">GrandLacerny7</option>

	 
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
 

