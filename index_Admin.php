<?php


include "dbconfig.php";

$con  =mysqli_connect($server, $username, $dbpassword, $dbname)
	or die ("conection fail!");


# Execute the SQL query and return records
$query = "SELECT * FROM games.products ORDER BY review DESC; ";

#echo "<br>query: $query\n";
$result = mysqli_query($con, $query);

# Fetch the data from the database, one row

$row1 = mysqli_fetch_array($result);

$gameTitle = $row1['title'];
$gameGenre = $row1['genre'];
$gamePrice = $row1['price'];
$gameReview = $row1['review'];
$gameRating= $row1['rating'];


$row2 = mysqli_fetch_array($result);

$gameTitle2 = $row2['title'];
$gameGenre2 = $row2['genre'];
$gamePrice2 = $row2['price'];
$gameReview2 = $row2['review'];
$gameRating2= $row2['rating'];


$row3 = mysqli_fetch_array($result);

$gameTitle3 = $row3['title'];
$gameGenre3 = $row3['genre'];
$gamePrice3 = $row3['price'];
$gameReview3 = $row3['review'];
$gameRating3= $row3['rating'];








?>


<!DOCTYPE html>
<html>
<head>
	<title>Gamer Index Page</title>
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
				<li><a href="index_Admin.php">Home</a></li>
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

	<div id = "content">

		<h1>Welcome Gamer! Check out our featured Titles  </h1>

		<div class = "column1">
			<img  


			<?php 


			if($gameGenre == "FPS"){
				echo "src='GameTitles/fps_graphic.png'" ;

				}



				if($gameGenre== "MMO"){
				echo "src='GameTitles/mmo_graphic.png'" ;
				}

				if($gameGenre == "RTS"){
				echo "src='GameTitles/rts_graphic.png'" ;

				}

				if($gameGenre == "RPG"){
				echo "src='GameTitles/rpg_graphic.png'" ;
				}

				else{
					echo "src='GameTitles/default_graphic.png'" ;

				}





			?>







			class="align-center medium">

		</div>

		<div class = "column2">
			<h2> <?php 
				
				
				echo $gameTitle; 

			 ?>
			 	
			 </h2>

			
			<h3> <?php 
				
				
				echo $gameGenre; 

			 ?>
			</h3>



			<p>Price: $<?php 
				
				
				echo $gamePrice; 

			 ?>    <br>Review Score:<?php 
				
				
				echo $gameReview; 

			 ?></p>
			

		</div>
		<div class = "column3" >
			

			<img id="gameRating1"  

			<?php 


			if($gameRating == "M"){
				echo "src='GameTitles/Esrb_Rating_Mature.jpg'" ;

				}



				if($gameRating == "E"){
				echo "src='GameTitles/Esrb_Rating_Everyone.jpg'" ;

				}

				if($gameRating == "T"){
				echo "src='GameTitles/Esrb_Rating_Teen.jpg'" ; 

				}

				if($gameRating == "A"){
				echo "src='GameTitles/Esrb_Rating_Adult.jpg'" ;

				}

				else{
					echo "src='GameTitles/Esrb_Rating_default.jpg'" ;

				}





			?>
			 

			 class="column3">

			 

		 </div>


 

		<div class = "column1">
					<img  


			<?php 


			if($gameGenre2 == "FPS"){
				echo "src='GameTitles/fps_graphic.png'" ;

				}



				if($gameGenre2== "MMO"){
				echo "src='GameTitles/mmo_graphic.png'" ;
				}

				if($gameGenre2 == "RTS"){
				echo "src='GameTitles/rts_graphic.png'" ;

				}

				if($gameGenre2 == "RPG"){
				echo "src='GameTitles/rpg_graphic.png'" ;
				}

				else{
					echo "src='GameTitles/default_graphic.png'" ;

				}





			?>







			class="align-center medium">
			






		</div>

		<div class = "column2">
				<h2> <?php 
				
				
				echo $gameTitle2; 

			 ?>
			 	
			 </h2>

			
			<h3> <?php 
				
				
				echo $gameGenre2; 

			 ?>
			</h3>



			<p>Price: $<?php 
				
				
				echo $gamePrice2; 

			 ?>    <br>Review Score:<?php 
				
				
				echo $gameReview2; 

			 ?></p>


		</div>

		<div class = "column3" >
			

			<img id="gameRating1"  

			<?php 


			if($gameRating2 == "M"){
				echo "src='GameTitles/Esrb_Rating_Mature.jpg'" ;

				}



				if($gameRating2 == "E"){
				echo "src='GameTitles/Esrb_Rating_Everyone.jpg'" ;

				}

				if($gameRating2 == "T"){
				echo "src='GameTitles/Esrb_Rating_Teen.jpg'" ; 

				}

				if($gameRating2 == "A"){
				echo "src='GameTitles/Esrb_Rating_Adult.jpg'" ;

				}

				else{
					echo "src='GameTitles/Esrb_Rating_default.jpg'" ;

				}





			?>
			 

			 class="column3">

			 

		 </div>


 





		<div class = "column1">
					<img  


			<?php 


			if($gameGenre3 == "FPS"){
				echo "src='GameTitles/fps_graphic.png'" ;

				}



				if($gameGenre3== "MMO"){
				echo "src='GameTitles/mmo_graphic.png'" ;
				}

				if($gameGenre3 == "RTS"){
				echo "src='GameTitles/rts_graphic.png'" ;

				}

				if($gameGenre3 == "RPG"){
				echo "src='GameTitles/rpg_graphic.png'" ;
				}

				else{
					echo "src='GameTitles/default_graphic.png'" ;

				}





			?>







			class="align-center medium">






		</div>

		<div class = "column2">
				<h2> <?php 
				
				
				echo $gameTitle3; 

			 ?>
			 	
			 </h2>

			
			<h3> <?php 
				
				
				echo $gameGenre3; 

			 ?>
			</h3>



			<p>Price: $<?php 
				
				
				echo $gamePrice3; 

			 ?>    <br>Review Score:<?php 
				
				
				echo $gameReview3; 

			 ?></p>


		</div>


		<div class = "column3" >
			

			<img id="gameRating1"  

			<?php 


			if($gameRating3 == "M"){
				echo "src='GameTitles/Esrb_Rating_Mature.jpg'" ;

				}



				if($gameRating3 == "E"){
				echo "src='GameTitles/Esrb_Rating_Everyone.jpg'" ;

				}

				if($gameRating3 == "T"){
				echo "src='GameTitles/Esrb_Rating_Teen.jpg'" ; 

				}

				if($gameRating3 == "A"){
				echo "src='GameTitles/Esrb_Rating_Adult.jpg'" ;

				}

				else{
					echo "src='GameTitles/Esrb_Rating_default.jpg'" ;

				}





			?>
			 

			 class="column3">

			 

		 </div>









	 </div>



	
	




</body>
</html>