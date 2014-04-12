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
<title>AVID - Educators Resourse</title>

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
	<h1 class="red">Educator Resourse</h1>
	<section class="inner">
	<img class="logo-educator" src="img/logo.jpg" alt="">
	<p>MyAVID is the resource center for AVID sites and districts. On MyAVID, educators from all parts of the AVID College Readiness System will find:</p>
	<p>Curriculum Resources, Tutorial Resources,  WebEx Trainings, Discussion Forums, Data Collection, Lesson Plans, On Demand Modules, And Much More!  </p>
	<img class="logo-educator" src="img/login.png" alt="">

	<h2>Funding AVID</h2>
	<p>AVID Center has developed the Funding AVID resources to support school districts and institutions of higher education seeking funds to pay for AVID.</p>
	
	<p>Federal and State Education Initiatives – Resources for numerous initiatives available for funding the AVID College Readiness System in your K-12 school district and at your postsecondary institution. Information on how AVID aligns with various initiatives is available here. </p>

	<p>Foundations & Corporations – Tips on how to find and engage with national, regional and local organizations to support AVID.</p>

	<p>Building Community Support – Utilizing the local community and making partnerships with other internal programs and external organizations to generate resources and support. 

	<p>- Grant Writing Resources</p>
	<p>- Current Funding Opportunities</p>

	<a href="">LEARN MORE</a>
	</section>
</section>
<img class="educator" src="img/educator-resc-bg.jpg">
<!--footer-->
<?php include('views/footer.php');?>
</body>
</html> 