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
<title>AVID - About Us</title>

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
	<h1 class="orange">About</h1>
	<section class="inner">
	<ul class="ab-section left">
		<li>
			<h2>What AVID Does</h2>
			<p>Advancement Via Individual Determination (AVID) is a nonprofit organization that operates with one guiding principle: Hold students accountable to the highest standards, provide academic and social support, and they will rise to the challenge. AVID’s kindergarten through Higher Education System brings research based curriculum and strategies to students each day that develop critical thinking, literacy and math skills across all content areas. <a href="">LEARN MORE</a> about what we do.</p>
		</li>
		<li>
			<h2>AVID’s Impact</h2>
			<p>For more than 30 years, AVID has prepared students for college readiness and success. From its beginnings in one classroom with 32 students in San Diego, it now impacts the lives of hundreds of thousands of students throughout the United States and the world. At its sites, AVID affects leadership, systems, instruction and culture. <a href="">SEE AVID’S RESULTS</a> and learn how AVID is impacting a school near you</p>
		</li>
		<li>
			<h2>Who We Are</h2>
			<p>AVID has a diverse staff dedicated to serving our districts, schools, colleges and universities in their efforts to ensure all students are college and career ready. AVID’s leadership is made up of individuals with long careers in education encompassing both classroom and administration, along with community leaders and educational activists. <a href="">GET TO KNOW</a> our Executive Leadership and Board of Directors. </p>
		</li>
		<li>
			<h2>Frequently Asked Questions</h2>
			<p>Find answers to questions like: How does AVID get to a school? What should I know as an AVID parent? How does AVID align with the Common Core State Standards? <a href="">VISIT THE FAQ.</a></p>
		</li>
	</ul>
	<ul class="ab-section right">
		<li>
			<h2>Join Our Team!</h2>
			<p>Are you passionate about student success and want to work with a group of mission driven colleagues? Learn more about <a href="">WORKING AT AVID.</a></p>
		</li>
		<li>
			<h2>Support AVID</h2>
			<p>Your donations help us continue to prepare all students for college and postsecondary opportunities! <a href="">LEARN ABOUT</a> ways you can help.</p>
		</li>
		<li>
			<h2>Contact Us</h2>
			<p>Have more questions? Want to visit a site? Want an AVID speaker at your school or event? <a href="">LET US HEAR</a> from you!</p>
		</li>
	</ul>
	</section>
</section>
	<img class="about"src="img/about-bg.jpg" alt="">
<!--footer-->
<?php include('views/footer.php');?>
</body>
</html> 