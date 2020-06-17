<!DOCTYPE html>
<html>

<head>
	<title>
		<?php echo $title; ?> - Artisan Kitchen and Bath</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="utf-8" />
	<!-- Bootstrap -->
	<link href="base/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
	<link href="base/css/artisan-theme.css?v=1.1" rel="stylesheet" />
	<link href="base/css/bootstrap-image-gallery.min.css" rel="stylesheet" />
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="base/js/html5shiv.js"></script>
		<script src="base/js/respond.min.js"></script>
		<link href="base/css/artisan-theme-ie.css" rel="stylesheet" />
	<![endif]-->
	<?php if ($filename=='contact.php' ){ echo "<script src='https://www.google.com/recaptcha/api.js'></script>"; }; ?>
	<script>
		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-18566626-1', 'auto');
		ga('require', 'linkid');
		ga('send', 'pageview');
	</script>
</head>

<body id="body">
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PLZ4FP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PLZ4FP');</script>
<!-- End Google Tag Manager -->
	<?php include 'header.php'; ?>
	<?php include 'menu.php'; ?>

	<div id="content" class="container">
