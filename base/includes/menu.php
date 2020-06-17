<header class="container">
	<div class="col-xs-10 col-sm-5 col-md-6 col-lg-7 logo">
		<a href="index.php"><img alt="Artisan Wood Designs" class="img-responsive" src="base/images/logo-new.png"></a>
	</div>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="navbar-collapse collapse container">
			<ul class="nav navbar-nav navbar-right">
				<li<?php if($filename == 'index.php'){ echo ' class="active"';}?>><a href="index.php">Home</a></li>
				<li class="dropdown<?php if(($filename == 'index.php')||($filename == 'contact.php')||($filename == 'affiliates.php')){ } else { echo ' active';}?>"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li<?php if($filename == 'kitchens.php'){ echo ' class="active"';}?>><a href="kitchens.php">Kitchens</a></li>
						<li<?php if($filename == 'bathrooms.php'){ echo ' class="active"';}?>><a href="bathrooms.php">Bathrooms</a></li>
						<li<?php if($filename == 'cabinets.php'){ echo ' class="active"';}?>><a href="cabinets.php">Custom Cabinets</a></li>
						<li<?php if($filename == 'stone.php'){ echo ' class="active"';}?>><a href="stone.php">Countertops & Backsplashes</a></li>
					</ul>
				</li>
				<li<?php if($filename == 'affiliates.php'){ echo ' class="active"';}?>><a href="affiliates.php">Affiliates</a></li>
				<li<?php if($filename == 'contact.php'){ echo ' class="active"';}?>><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		</div>
	</nav>
</header>
