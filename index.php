<?php
$title="Welcome";
$filename = basename(__FILE__);
?>

	<?php include 'base/includes/top.php'; ?>
		<div id="myCarousel" class="carousel slide home" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active"> <img src="./base/images/promo1.jpg" alt="">
					<div class="container">
						<div class="carousel-caption">
							<h2>Kitchens</h2>
							<p><a class="btn btn-lg btn-primary" href="kitchens.php">See more kitchens</a></p>
						</div>
					</div>
				</div>
				<div class="item"> <img src="./base/images/promo2.jpg" alt="">
					<div class="container">
						<div class="carousel-caption">
							<h2>Bathrooms</h2>
							<section class="hskd"></section>
							<p><a class="btn btn-lg btn-primary" href="bathrooms.php">See more bathrooms</a></p>
						</div>
					</div>
				</div>
				<div class="item"> <img src="./base/images/promo3.jpg" alt="">
					<div class="container">
						<div class="carousel-caption">
							<h2>Custom Cabinets</h2>
							<p><a class="btn btn-lg btn-primary" href="cabinets.php">See more custom cabinets</a></p>
						</div>
					</div>
				</div>
				<div class="item"> <img src="./base/images/promo5.jpg" alt="">
					<div class="container">
						<div class="carousel-caption">
							<h2>Countertops & Backsplashes</h2>
							<p><a class="btn btn-lg btn-primary" href="stone.php">See more countertops & backsplashes</a></p>
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> </div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<h1><?php echo $title;?></h1>
				<p class="lead">Artisan Wood Designs offers personalized service from design, production and installation. We hold ourselves to the highest standards of craftsmanship, creativity and professionalism. Whether you are planning a new home or remodeling your present home, the exceptional quality and elegance of our work will enhance both its beauty and its value.</p>
				<p><a class="btn btn-default" href="contact.php">Contact us to book an appointment today.</a></p>
			</div>
		</div>
		<hr class="featurette-divider">
		<div class="featurette row">
			<div class="col-md-7">
				<h2 class="featurette-heading">Offices <span class="text-muted">for all your business needs.</span></h2>
			</div>
			<div class="col-md-5"> <img class="featurette-image img-responsive" src="./base/images/section1.jpg" alt=""> </div>
		</div>
		<hr class="featurette-divider">
		<div class="row featurette">
			<div class="col-md-7 col-md-push-5">
				<h2 class="featurette-heading">Livingrooms <span class="text-muted">for the whole family.</span></h2>
			</div>
			<div class="col-md-5 col-md-pull-7"> <img class="featurette-image img-responsive" src="./base/images/section2.jpg" alt=""> </div>
		</div>
		<hr class="featurette-divider">
		<div class="row featurette">
			<div class="col-md-7">
				<h2 class="featurette-heading">Bar <span class="text-muted">for the basement.</span></h2>
			</div>
			<div class="col-md-5"> <img class="featurette-image img-responsive" src="./base/images/section3.jpg" alt=""> </div>
		</div>
		<hr class="featurette-divider">
		<div class="g-plusone" data-size="medium"></div>
	<?php include 'base/includes/bottom.php'; ?>
