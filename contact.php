<?php
$title="Contact Us ";
$filename = basename(__FILE__);
?>
	<?php include 'base/includes/top.php'; ?>
	<h1><?php echo $title;?></h1>
	<div class="row">
		<div class="col-md-4">
		<div itemscope itemtype="http://schema.org/LocalBusiness">
				<p itemprop="name">Artisan Wood Designs<a class="visible-xs visible-sm" href="https://goo.gl/maps/cXQyxoRyWEz2P4q48"> (Open in Google Maps)</a></p>
				<p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">18255 Tyotown Rd</span><br />
				<span itemprop="addressLocality">South Glengarry</span>, <span itemprop="addressRegion">Ontario</span><br />
				<span itemprop="postalCode">K6H&nbsp;7S7</span></p>
				<p itemprop="telephone"><span class="glyphicon glyphicon-phone"></span>613-933-7272</p>
				<p itemprop="email"><a href="mailto:info@artisankitchenandbath.ca"><span class="glyphicon glyphicon-envelope"></span>info@artisankitchenandbath.ca</a></p>
			</div>
		</div>
		<div class="col-md-8 hidden-xs">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2818.5231397500597!2d-74.66320138454928!3d45.054897879098135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc1744c90fd3f9%3A0x545b36d9479eb799!2sArtisan%20Kitchen%20and%20Bath!5e0!3m2!1sen!2sca!4v1592360298094!5m2!1sen!2sca" width="100%" height="450" allowfullscreen></iframe>
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
