<?php
session_start();
?>
 <?php include ('functions.php'); ?>
<?php include ('connect.php'); ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<!---MY CSS LINKS--->
<link href="style.css" rel="stylesheet" type="text/css"/>
<!-- Fonts -->	


<!-- For responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Explore & More</title>
</head>
<body>
	
	<header>
			<div id="topnavDIV">
				<ol class="top-nav">
					
						<li>
							<div class="logodiv">
								<a href="index.php"><img src="img/explore.png" class="logoheader" class="
								<?php 
								// current or '' because it is the Index page
								echo($currentPage == 'index.php' || $currentPage == '') ? 'activelink' :''?>"> </a>
							</div>
						</li>
					
						<li>
							<h1><a href="popular-destinations.php" class="<?php
							echo ($currentPage == 'popular-destinations.php')?'activelink' :''
							?>"> Popular </a> </h1>
						</li>
					
						<li>
							<h1><a href="all-destinations.php"  class="<?php echo($currentPage == 'all-destinations.php') ? 'activelink' :''?>">All Destinations</a></h1>
						</li>
						<li>
							<h1><a href="random-destination.php" class="<?php
							echo ($currentPage == 'random-destination.php' )?'activelink' :''
							?>">Randomize</a></h1>
						</li>

						<li>
							<h1><a href="about-us.php" class="<?php
							echo ($currentPage == 'about-us.php' )?'activelink' :''
							?>">About Us</a></h1>
						</li>

						
						<li>
							<div class="fav-div">
								<a href="favorite-destinations.php"><img src="img/heart.png" class="fav-icon" class="
								<?php
								echo ($currentPage == 'favorite-destinations.php' )?'activelink' :''
								?>"> </a>
								</div>
							</li>
						<li>
							<?php 
							if (isset($_SESSION['loggedin'])){ 
							if($_SESSION['loggedin']=== "true"){
								echo "<h1><a href='account.php' class='";
								echo ($currentPage == 'account.php' )?'activelink' :'';
								echo "'>My Account</a></h1>";
							}}else{
								echo "<h1><a href='login.php' class='";
								echo ($currentPage == 'login.php' )?'activelink' :'';
								echo "'>Log in</a></h1>";	
							
							}
						

							?>
							
						</li>
						
					<!-- </div> -->
				</ol>
			</div> <!-- end of header div -->
		</header>

