<!DOCTYPE html>
<html lang="sv">
<head>
	<title>
		Perkahloic
	</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"/> -->
	<link rel="stylesheet" type="text/css" href="style.css" id="css" />
	<meta charset="utf-8">
	<meta name="robots" content="noindex, nofollow">
	<meta name="Perkaholic" content="Videogame perks for real life">
	<meta name="keywords" content="Perkaholic, sweet sweet superpower">
	<link rel="icon" type="image/x-icon" href="img/favicon.ico">
</head>
<body>
	<div id="index-grid-container">
		<header class="head">
			<?php require_once "header.php"; ?>
		</header>
		<nav class="menu">
			<ul id="product-category-links">
				<li class="li-inline product-category-1"><a class="category-links" href="#" tabindex="4">Cupcakes</a></li>
				<li class="li-inline product-category-2"><a class="category-links" href="#" tabindex="5">Coffee</a></li>
				<li class="li-inline product-category-3"><a class="category-links" href="#" tabindex="6">Crisps</a></li>

				<!-- <a href="#" tabindex="2" class="product-category-1"><li class="li-inline">Cupcakes</li></a>
				<a href="#" tabindex="3" class="product-category-2"><li class="li-inline">Coffe</li></a>
				<a href="#" tabindex="4" class="product-category-3"><li class="li-inline">Sweets</li></a> -->
			</ul>
		</nav>
		<main  class="main">
			<!--   /* -----------------------------------------------------------KATEGORIER---END*/ -->
			<div id="main-cover-w1" class="main-cover">
				<div class="categoryCupcake">

				<img src="img/categoryCupcake.png" class="cat-img1 handikappad" alt="cupcake" />
				<img src="img/categoryTitleCupcake.png" class="cat-img2 handikappad" alt="cupcake" />

				<div class="cat-info" >
					<h2 class="cat-title"> <a href="http://example.com" tabindex="100"> Cupcake</a></h2>
					<p class="cat-text">
						Everyone loves cupcakes. Cupcakes are sweet and tasty. Cupcakes are just great. But what would you say if I told you that you could combine cupcakes with perks, perks that can give you superhuman abilities, you wouldn’t believe it right? At Perkaholic this is possible. Buy you perk-stuffed-cupcake now and enjoy life as a superhero.
					</p>
				</div>
			</div>
			</div>
			<div id="main-cover-over1" class="main-cover">
			


			</div>




			<div id="main-cover-w2" class="main-cover">
						<div id="coffe"   class="categoryCupcake">
				<img src="img/categoryCoffe.png" class="cat-img1 handikappad" alt="kaffe" />
				<img src="img/categoryTitleCoffe.png" class="cat-img2 handikappad" alt="kaffe" />
				
				<div class="cat-info" >
					<h2 class="cat-title"> <a href="http://example.com" tabindex="101"> Coffe</a></h2>
					<p class="cat-text">
						The best way to start your day has to be waking up to the smell of freshly brewed coffee. But wait, why not combine your favorite smell in the morning with some perks, like being able to speed up your reading and finish all those books you didn’t finish last year in less than an hour. At Percaholic this is possible. Buy you perk-brewed-coffe now and enjoy life at the same speed as a super computer.

					</p>
				</div>
			</div>

			</div>
			<div id="main-cover-over2" class="main-cover"></div>


			<div id="main-cover-w3" class="main-cover">
						<div id="crisp" class="categoryCupcake">
				<img src="img/categoryCrisps.png" class="cat-img1 handikappad" alt="crisps" />
				<img src="img/categoryTitleCrisps.png" class="cat-img2 handikappad" alt="crisps" />
				
				<div class="cat-info" >
					<h2 class="cat-title"> <a href="http://example.com" tabindex="102"> Crisps</a></h2>
					<p class="cat-text">
						Everyone loves crips. crips are salty and tasty. crips are just great. But what would you say if I told you that you could combine crips with perks, perks that can give you superhuman abilities, you wouldn’t believe it right? At Perkaholic this is possible. Buy you perk-filled-crips now and enjoy life as a superhero.
					</p>
				</div>
			</div>


			</div>
			
		</main>
		<footer class="foot">
			<?php require_once "footer.php"; ?>
		</footer>
	</div>
	<script type="text/javascript">
	var funktionsnedsatt = 1;
	function handikappad(){
		console.log("RETARD = "+funktionsnedsatt);
		var css = document.getElementById('css');
		if (funktionsnedsatt){
			console.log("handikappad");
			funktionsnedsatt = 0;
			css.setAttribute('href','handikappad.css');
			
		}else{
			console.log("inte handikappad");
			funktionsnedsatt = 1;
			css.setAttribute('href','style.css');
			
		}
	}
	</script>
</body>
</html>