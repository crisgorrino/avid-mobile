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
<title>AVID - Students Resources</title>

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
<section>
	<h1 class="violet title">Press |  Blog |  Video | Radio</h1>
	<section class="inner">
	<h1>NEWS ROOM</h1>
	<div class="press cf">
	<img class="press-img" src="img/press.png">
	<p>AVID News Press Releases contain the latest news directly from AVID Center and are available for viewing and downloading. <a href="">AVID Participates in White House Roundtable</a> 1/22/14</p>
	<ul>
		<li>
			<h3 class="blue-sky">CELEBRATIONS</h3>
			<p>This is where we celebrate the world of AVID - The places, the people, and the passion. From AVID's birthplace in San Diego, CA to Melbourne, FL to Germany to Japan, and just about everywhere in between. Here we will honor your success. We will share, learn, and feel connected to this great, extended family that is AVID.</p>
		</li><li>
			<h3 class="blue-sky">IN THE NEWS</h3>
			<p>our official source for featured national and international news on the AVID program is available here. We will keep you up-to-date on our impact across the globe as people share about AVID in their local communities.</p>
		</li><li>
			<h3 class="blue-sky">PUBLICATIONS</h3>
			<p>AVID Center produces two publications: <a href="">Access</a>, an educational journal, and <a href="">Year in Review</a>, AVID's annual status report. Both publications allow AVID Center to showcase outstanding practitioners and AVID programs around the world in addition to focusing on the latest educational trends and issues.</p>
		</li>
	</ul>
	</div>
	</section>
</section>
<section class="container">
	<section class="inner">
	<img src="img/blog.png">
	<p><a href="">Adventures in College & Career Readiness</a> encompasses current efforts in preparing all students for success in our global society. View some of our <a href="">Top Blogs from 2013</a> that report on topics such as best practices, keys to success, college tours, and interviews with some of the brightest success stories.</p>
	<img src="img/video.png">
	<p>View some of the moving, heartfelt, and inspiring stories from AVID students and teachers from around the globe. In addition, we'll be showcasing some of our AVID schools' videos. Be sure to check out additional videos on <a href="">AVID's YouTube channel.</a></p>
	<img src="img/radio.png">
	<p>AVID College Ready Radio covers great stories and current efforts in preparing students for college success. The show provides interviews with thought leaders in education, as well as experts in the field of college and career readiness, and inspiring stories of AVID students and educators from around the world. <a href="">LISTEN NOW</a></p>
	</section>
</section>
<!--footer-->
<?php include('views/footer.php');?>
</body>
</html> 