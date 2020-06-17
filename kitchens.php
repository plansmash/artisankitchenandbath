<?php 
$title="Kitchens";
$filename = basename(__FILE__);
?>
	<?php include 'base/includes/top.php'; ?>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active"> <img src="base/images/kitchen-1.jpg" alt="">
				</div>
				<div class="item"> <img src="base/images/kitchen-2.jpg" alt="">
				</div>
				<div class="item"> <img src="base/images/kitchen-3.jpg" alt="">
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
		<h1><?php echo $title;?></h1>
		<p class="lead">We design our kitchens around three main styles each with their own unique feel and appearance. Click through to see some of our past work specially created to meet each customer’s needs, and budget.</p>
		<div class="row" id="content">
			<section class="col-md-4 col-sm-6">
				<h2>Traditional</h2>
				<p><img class="img-responsive thumbnail" src="base/images/kitchen-traditional.jpg" alt=""></p>
				<p><a class="btn btn-lg btn-primary btn-block" href="gallery-traditional.php">Gallery</a></p>
				<p>Warm, elegant and cozy, traditionally styled kitchens are timeless and inviting. Traditional kitchens emphasize symmetry, incorporating elaborate details such as:</p>
				<ul>
					<li>Crown Molding, fluting, corbels and other ornamentation.</li>
					<li>Raised panel door styles</li>
					<li>Cherry, Maple, Walnut cabinetry</li>
					<li>Vintage & Glazed finishes</li>
					<li>Antique fixtures and appliances</li>
					<li>Wood, stone or other natural materials</li>
				</ul>
			</section>
			<section class="col-md-4 col-sm-6">
				<h2>Contemporary</h2>
				<p><img class="img-responsive thumbnail" src="base/images/kitchen-contemporary.jpg" alt=""></p>
				<p><a class="btn btn-lg btn-primary btn-block" href="gallery-contemporary.php">Gallery</a></p>
				<p>Also described as modern, clean and crisp contemporary kitchens are sleek and minimalistic, but far from plain and simple.</p>
				<p>You can expect to see the following characteristics in a contemporary kitchen:</p>				<ul>
					<li>Horizontal lines</li>
					<li>Textured melamine or wood grain veneers</li>
					<li>White or bold color, Satin or high gloss finishes</li>
					<li>Slab door style, lift up hardware</li>
					<li>No moldings or ornamentation</li>
					<li>Stainless steel and other metallic accents</li>
					<li>Quartz countertops</li>
				</ul>
			</section>
			<div class="clearfix visible-sm"></div>
			<section class="col-md-4 col-sm-6">
				<h2>Transitional</h2>
				<p><img class="img-responsive thumbnail" src="base/images/kitchen-transitional.jpg" alt=""></p>
				<p><a class="btn btn-lg btn-primary btn-block" href="gallery-transitional.php">Gallery</a></p>
				<p>Offering the best of both worlds, transitional kitchens include elements of both traditional and contemporary design equating to a classic look. Eclectic in nature, they mix natural and man-made materials as well as finishes and textures. Subtle accents draw the eye, adding flair without going overboard.</p>
			</section>
		</div>
	<?php include 'base/includes/bottom.php'; ?>
