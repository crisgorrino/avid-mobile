<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/component.css" type="text/css" media="all">
<link rel="stylesheet" href="css/normalize.css" type="text/css" media="all"><!--Estilos para resetear estilos CSS-->
<title>AVID</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/modernizr.js" type="text/javascript"></script><!--JS para apoyar en buscadores obsoletos-->
<script src="js/prefixfree.min.js" type="text/javascript"></script><!--JS que permite quitar los prefijos de efectos CSS como -webkit, -moz (no todos) -->
<script src="js/jquery.dlmenu.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function() {
		$( '#dl-menu' ).dlmenu({
		    animationClasses : { classin : 'dl-animate-in-2', classout : 'dl-animate-out-2' }
		});
	});
</script>
</head>

<body>
<!--Header-->
<?php include('views/header.php');?>
<!--index-->
<img class="slide-mob" src="img/slide-1-mob.jpg">
<img class="slide" src="img/slide-1.jpg">
<section class="container-sub">
	<h4 class="blue-sky">What's New?</h4>
	<section class="inner">
	<h2 style="margin: 0;">October 15, 2013</h2>
	<p style="margin: 0 0 2.5% 0;">Road Trip Nation</p>
	<h2 style="margin: 0;">October 15, 2013</h2>
	<p style="margin: 0 0 2.5% 0;">Gahr High AVID Program Receives $1K From Retired Teachers Association</p>
	</section>
</section>
<section class="container-sub">
	<h4 class="blue-sky">Events Calendar</h4>
	<section class="inner">
	<div class="ec">
	<h5>Path Trainings</h5>
	<p class="date">10/17 - 18 MN |
	10/18 - 19 WA</p>
	</div>
	<div class="ec">
	<h5>Leadership for College Readiness</h5>
	<p class="date">10/17 - 18 MN |
	10/18 - 19 WA</p>
	</div>
	<div class="ec">
	<h5>How to make your data work for you</h5>
	<p class="date">11/13-14, TX</p>
	</div>
	<div class="ec">
	<h5>Australia Summer Institute</h5>
	<p class="date">12/3-5, 2013</p>
	</div>
	<div class="ec">
	<h5>2014 National Conference</h5>
	<p class="date">12/12-14, 2013</p>
	</div>
	</section>
</section>
<section class="container-sub">
	<h4 class="blue-sky">Social Media</h4>
	<section class="inner">
	<p>Social Media area - Plug-ing Facebook</p>
	</section>
</section>
<section class="links-img">
	<img class="success" src="img/success-img.jpg" alt="">
	<img class="common" src="img/common-core.jpg" alt="">
	<img class="radio" src="img/avid-radio.jpg" alt="">
</section>
<!--footer-->
<?php include('views/footer.php');?>
</body>
</html> 