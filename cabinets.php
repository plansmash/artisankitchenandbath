<?php 
$title="Custom Cabinets";
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
				<div class="item active"> <img src="base/images/cabinet-1.jpg" alt="">
				</div>
				<div class="item"> <img src="base/images/cabinet-2.jpg" alt="">
				</div>
				<div class="item"> <img src="base/images/cabinet-3.jpg" alt="">
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
		<p><a class="btn btn-lg btn-primary btn-block" href="gallery-custom.php">Gallery</a></p>
		<h1><?php echo $title;?></h1>
		<p class="lead">Cabinetry can transform and enhance spaces anywhere in the home. We welcome challenging ideas and can create anything you desire.</p>
	<?php include 'base/includes/bottom.php'; ?>
