<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Nicefolio</title>
<link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/text.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/960.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/style.css" />

<script type="text/javascript" src="js/jquery-1.2.3.pack.js"></script>
<script type="text/javascript" src="js/jcarousellite_1.0.1.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
		
<!-- IE Conditionals -->

		<!--[if IE 6]>
		
		<script src="js/DD_belatedPNG.js"></script>
		<script>DD_belatedPNG.fix('h1 a, div, a, img, .postinfo, .sub, li, h4, h3, h5, h2');</script>

        <![endif]-->	

<script type="text/javascript">

$(function() {
    $(".image").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev",
		width: 251,
		visible: 1,
		speed:1000,
		easing: "easeOutBounce"
		
		
    });
	
	 $("#featuredtext").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev",
		visible: 1,
		speed:1000,
		vertical: true 
			
    });
	
});

</script>

</head>
<body id="contact">


<div id="header"></div>
<div class="container_12">
<div class="grid_6" id="logo"><a href="#"><img src="images/logo.png" alt="logo"/></a></div>

<div class="grid_6" id="menu">

<ul class="lavaLamp">

<li><a href="index.html" id="homenav">Home</a></li>
<li><a href="portfolio.html" id="portfolionav">Portfolio</a></li>
<li><a href="blog.html" id="blognav">Blog</a></li>
<li><a href="about.html" id="aboutnav">About</a></li>
<li class="last"><a href="contact.php" id="contactnav">Contact</a></li>

</ul>


</div>

<div class="grid_8" id="featuredtext">

    <ul>
	
     <li><h2 class="title">Nicefolio - Wordpress as CMS</h2><p class="portfoliotext">Nunc eleifend, enim nec posuere posuere, dui dolor interdum orci, non luctus
     pede felis a eros. Ut feugiat, magna id bibendum vehicula, ante eros ultricies 
     metus, imperdiet consequat quam dolor non lorem. Curabitur dignissim, purus
     id posuere<br/><br/> Vehicula, ipsum risus placerat lacus, vel interdum enim augue at au
     gue. Sed iaculis enim in lacus. Sed consequat ornare quam. Vivamus pulvinar 
     sollicitudin metus. Vivamus id risus sed pede convallis fringilla.</p></li>
	 
	 <li><h2 class="title">Darkfolio - Community theme</h2><p class="portfoliotext">Nunc eleifend, enim nec posuere posuere, dui dolor interdum orci, non luctus
     pede felis a eros. Ut feugiat, magna id bibendum vehicula, ante eros ultricies 
     metus, imperdiet consequat quam dolor non lorem. Curabitur dignissim, purus
     id posuere<br/><br/> Vehicula, ipsum risus placerat lacus, vel interdum enim augue at au
     gue. Sed iaculis enim in lacus. Sed consequat ornare quam. Vivamus pulvinar 
     sollicitudin metus. Vivamus id risus sed pede convallis fringilla.</p></li>
   
    </ul>
	
</div>


<div class="grid_4" id="featuredimage">  
<div class="imageholder">
<div class="image">

    <ul>
	
     <li><a href="http://themeforest.net/item/portfoliopress-premium-wordpress-theme/46820"><img src="images/sample.jpg"  width="310" height="185" alt=""/></a></li>
     <li><a href="http://themeforest.net/item/darkfolio-wordpress-theme/41411"><img src="images/sample2.jpg" width="310" height="185" alt="" /></a></li>
	 
    </ul>
	
</div>
</div>
</div>

<div class="grid_4">
<a class="prev" href="#">Prev</a>
<a class="next" href="#">Next</a>
</div>
</div>

<div class="content">
<div class="container_12" id="content">
<div class="grid_8" style="margin-bottom: 35px ;margin-top: 50px;" id="portfoliocontent">

<div class="postbox">

<h4>Contact us</h4>

<div class="contactbox">Fusce est. Duis vitae lorem sit amet nisi gravida congue. Maecenas erat ante, porta id.</div>

<?php include 'mail.php' ;?>

</div>
</div>

<div class="grid_4" style="margin-top: 50px; margin-bottom: 50px;"> 
<div class="sidebarbox">

<h4 class="info">Contact information</h4>

Vestibulum quis enim ac pede pharetra accumsan.
<br/><br/>
+123456789<br/>
+123456789<br/><br/>
ceo@domainname.com

</div>
</div>
</div>
</div>

<div id="footer">

<div class="container_12">

<div class="grid_8" id="social">

<a href="#"><img src="images/facebook.png" alt="facebook"/></a>
<a href="#"><img src="images/twitter.png" alt="twitter"/></a>
<a href="#"><img src="images/rss.png" alt="rss"/></a>

</div>


<div class="grid_4" id="copyright"> <p>Copyright 2009 Nicefolio | Theme by jasminweb</p></div>
</div>
</div>
</body>
</html>