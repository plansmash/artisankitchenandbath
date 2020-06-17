<?php
$title="Contact Us ";
$filename = basename(__FILE__);
?>
	<?php include 'base/includes/top.php'; ?>
	<h1><?php echo $title;?></h1>
	<div class="row">
		<div class="col-md-4">
			<div itemscope itemtype="http://schema.org/LocalBusiness">
				<p itemprop="name">Artisan Wood Designs<a class="visible-xs visible-sm" href='maps:daddr=45.0422772,-74.6974629&amp;saddr=Current%20Location'> (Click for directions)</a></p>
				<p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">2747 Marleau Avenue</span><br />
				<span itemprop="addressLocality">Cornwall</span>, <span itemprop="addressRegion">ON</span><br />
				<span itemprop="postalCode">K6H&nbsp;7B6</span></p>
				<p itemprop="telephone"><span class="glyphicon glyphicon-phone"></span>613-933-7272</p>
				<p itemprop="email"><a href="mailto:info@artisankitchenandbath.ca"><span class="glyphicon glyphicon-envelope"></span>Email Us</a></p>
			</div>
		</div>
		<div class="col-md-8 hidden-xs">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2819.1451061267!2d-74.69746288445664!3d45.04227717909824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc1a3d6a89613d%3A0x519477d6c968e261!2s2747+Marleau+Ave%2C+Cornwall%2C+ON+K6H!5e0!3m2!1sen!2sca!4v1455661427257"width="100%" height="450" allowfullscreen></iframe>
		</div>
	</div>
<!-- 	<h3>Comments / Questions</h3>
	<div class="well">
		<form class="form" action="#" method="post">
			<div class="form-group">
				<label class="float" for="name">Full Name:</label>
				<input class="form-control" id="name" name="name" type="text" />
			</div>
			<div class="form-group">
				<label class="float" for="email">Email: (required)</label>
				<input class="form-control" id="email" name="email" type="email" />
			</div>
			<div class="form-group">
				<label for="comments">Please submit any questions or comments:</label>
				<textarea class="form-control" cols="60" rows="10" id="comments" name="comments"></textarea>
			</div>
			<div class="g-recaptcha" data-sitekey="6LfIoQQTAAAAAIa_T7wewBdt2vUvPtSZqbDykJDM"></div>
			<button class="btn btn-primary" type="submit">Submit</button>
		</form>
	</div>
 -->	<?php include 'base/includes/bottom.php'; ?>
