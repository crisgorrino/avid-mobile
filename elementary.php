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
<title>AVID - Elementary</title>

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
<section class="container">
	<h1 class="violet">AVID Elementary</h1>
	<section class="inner">
	<div class="video"><img  src="img/elementary-vid-placeholder.jpg" alt="">
	</div>
	<p>AVID Elementary is a foundational component of the AVID College Readiness System and supports AVID Center's mission to close the achievement gap by preparing all students for college readiness and success in a global society.</p> 

	<p>AVID Elementary is based on the same learning foundation that underlies AVID Secondary. AVID Elementary is designed to be embedded into the daily instruction of all elementary classrooms across entire grade levels to maintain schoolwide structures.</p> 

	<p>The AVID Elementary implementation resources, trainings, and philosophy are all grounded in the idea that the growth mindset can be taught to students and that it is through the growth mindset that AVID students succeed in following their dreams and fulfilling their aspirations.</p> 
	<a href="">LEARN MORE</a>

	<p>AVID Elementary takes a systemic approach through stages Beginnings, Foundations, and Bridges. Schools receive implementation resources for different levels and settings in order to support all students on their journey to college readiness.</p>
	</section>
</section>
<section class="container-sub">
	<h3 class="violet">Beginnings</h3>
	<section class="inner">
	<p>Addresses the beginning years of education, when students are <strong>emerging as learners</strong>. Students are learning to read, learning to write, and learning to learn. </p>
	</section>
</section>
<section class="container-sub">
	<h3 class="violet">Fundations</h3>
	<section class="inner">
	<p>Addresses the foundational years of education, when students are <strong>becoming independent learners</strong>. Students are reading to learn, writing to learn, and learning to reflect on their own learning</p>
	</section>
</section>
<section class="container-sub">
	<h3 class="violet">Bridges</h3>
	<section class="inner">
	<p>Addresses the transitional years of education, when students are <strong>becoming independent thinkers</strong>. Students are thinking about thinking and learning about their own learning.</p>
	</section>
</section>
<!--footer-->
<?php include('views/footer.php');?>
</body>
</html> 